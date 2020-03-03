<?php


namespace App\Model;


use App\Service\Model;
use App\App;

class AdminModel extends Model
{
    protected static $table = 'users';

    public static function findAllUsers()
    {
        return App::getDatabase()->query("SELECT * FROM " . self::getTable() . " ", get_called_class());
    }

    public function findUserById(int $id)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE id=?";
        return App::getDatabase()->prepare($sql, [$id], get_called_class(), true);
    }

    public function findUserByMail(string $mail)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE email=?";
        return App::getDatabase()->prepare($sql, [$mail], get_called_class(), true);
    }

    public function addUser(string $name, string $firstname, string $mail, string $password)
    {
        $token = UserModel::generateToken(255);
        $sql = "INSERT INTO " . self::getTable() . " VALUES(NULL,?,?,?,?,NOW(),NULL,'user',?)";
        App::getDatabase()->prepareInsert($sql, [$name, $firstname, $mail, $password, $token]);
    }

    public static function editUser($id, $post)
    {
        $token = UserModel::generateToken(255);
        $sql = "UPDATE " . self::getTable() . " SET name=?, firstname=?, email=?, modified_at=NOW(), roles=?, token=? WHERE id=?";
        var_dump($sql);
        App::getDatabase()->prepareInsert($sql, [$post['name'], $post['firstname'], $post['email'],
            $post['roles'], $token, $_GET['id']]);
    }

    public function deleteUser(int $id)
    {
        $sql = "DELETE FROM " . self::getTable() . " WHERE id=?";
        App::getDatabase()->prepare($sql, [$id], get_called_class(), true);
    }

    public static function count()
    {
        $sql = "SELECT COUNT(id) FROM " . self::getTable();
        return App::getDatabase()->aggregation($sql);
    }
}
