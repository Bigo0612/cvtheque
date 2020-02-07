<?php

namespace src\respository;

class UserRepository
{
    private int $id;
    private $name;
    private $firstname;
    private $mail;
    private $password;
    private $created_at;
    private $modified_at;
    private $roles;
    private $token;

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
