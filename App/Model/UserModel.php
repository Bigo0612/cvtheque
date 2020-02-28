<?php

namespace App\Model;

use App\Service\Database;
use App\Service\Model;
use App\App;

class UserModel extends Model
{
    protected static $table = 'users';
    private int $id;
    private $name;
    private $firstname;
    private $mail;
    private $password;
    private $created_at;
    private $modified_at;
    private $roles;
    private $token;

    public static function insertUser(string $name, string $firstname, string $mail, string $password): void
    {
        $token = UserModel::generateToken(255);
        $sql = "INSERT INTO " . self::getTable() . " VALUES(NULL,?,?,?,?,NOW(),NULL,'user',?)";
        App::getDatabase()->prepareInsert($sql, [$name, $firstname, $mail, $password, $token]);
    }

    public static function userLogin(string $email)
    {
        $sql = "SELECT * FROM " . self::getTable() . " WHERE email= ?";
        return App::getDatabase()->prepare($sql, [$email], get_called_class(),true);
    }

    public static function update($id,$post): void
    {
        $sql = "UPDATE ". self::getTable() ." SET email = ?,nom = ?,fruit_id = ?, modified_at = NOW() WHERE id = ?";
        App::getDatabase()->prepareInsert($sql,[$post['name'],$post['firstname'],$post['mail'],
            $post['password'], $post['created_at'], $post['modified_at'], $post['roles'], $post['token']]);
    }

    public static function generateToken($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function getID($id)
    {
        return $this->$id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName($name)
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getFistname($fistname)
    {
        return $this->firstname;
    }

    public function getMail($mail)
    {
        return $this->mail;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    public function getPassword($password)
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getCreatedAt($created_at)
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getModifiedAt($modified_at)
    {
        return $this->modified_at;
    }

    public function setModifiedAt($modified_at)
    {
        $this->modified_at = $modified_at;
        return $this;
    }

    public function getRoles($roles)
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    public function getToken($token)
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }
}
