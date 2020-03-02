<?php


namespace App\Model;


use App\Service\Model;
use App\App;

class AdminModel extends Model
{
    protected static $table = 'users';

    public function findAllUsers()
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE roles=?";
        return App::getDatabase()->prepare($sql, 1, get_called_class(), true);
    }

    public function findUserById(int $id)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE id=?";
        return App::getDatabase()->prepare($sql, [$id], get_called_class(), true);
    }

    public function findUserByMail(string $mail)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE mail=?";
        return App::getDatabase()->prepare($sql, [$mail], get_called_class(), true);
    }

    public function addUser(string $name, string $firstname, string $mail, string $password): void
    {
        $token = UserModel::generateToken(255);
        $sql = "INSERT INTO " . self::getTable() . " VALUES(NULL,?,?,?,?,NOW(),NULL,'user',?)";
        App::getDatabase()->prepareInsert($sql, [$name, $firstname, $mail, $password, $token]);
    }

    public function editUser(string $name, string $firstname, string $mail, string $password, $roles): void
    {
        $token = UserModel::generateToken(255);
        $sql = "UPDATE " . self::getTable() . "SET name=?, firstname=?, mail=?, pass=?, NULL, NOW(), roles=?, token=?";
        App::getDatabase()->prepareInsert($sql, [$name, $firstname, $mail, $password, $roles, $token]);
    }

    public function deleteUser(int $id): void
    {
        $sql = "DELETE FROM " . self::getTable() . " WHERE id=?";
        App::getDatabase()->prepare($sql, [$id], get_called_class(), true);
    }
}
