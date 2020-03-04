<?php


namespace App\Model;

use App\App;
use App\Service\Model;

class CvModel extends Model
{
    protected static $table = 'curiculum';

    protected $id;
    protected $name;
    protected $firstname;
    protected $mail;
    protected $phone_number;
    protected $adress;
    protected $about;
    protected $experience;
    protected $experience_date_start;
    protected $experience_date_end;
    protected $exeperience_desc;
    protected $skills;
    protected $lang;
    protected $hob;
    protected $created_at;
    protected $modified_at;
    protected $id_users;

    public static function insert($name,$firstname,$mail,$phone_number,$adress,$about,$experience,$experience_date_start,$experience_date_end,$exeperience_desc,$skills,$lang,$hob,$id_users)
    {
        $sql = " INSERT INTO " . self::getTable() . " VALUES (NULL,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),NULL,NULL)";
        die($sql);
        return App::getDatabase()->prepareInsert($sql,[$name,$firstname,$mail,$phone_number,$adress,$about,$experience,$experience_date_start,$experience_date_end,$exeperience_desc,$skills,$lang,$hob,$id_users]);
    }
}