<?php


namespace App\Model;


use App\Service\Model;
use App\App;

class TicketModel extends Model
{
    protected static $table = 'ticket';
    private int $id;
    private int $id_contact;
    private $created_at_contact;
    private int $id_answer;
    private $created_at_answer;
    private $importance;

    public static function tickett(){
        $sql = "SELECT * FROM " . self::getTable() . " LEFT JOIN answer ON ticket.id_answer = answer.id LEFT JOIN contact ON ticket.id_contact = contact.id";
        return App::getDatabase()->queryRaw($sql);



    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdContact()
    {
        return $this->id_contact;
    }

    /**
     * @param int $id_contact
     */
    public function setIdContact($id_contact)
    {
        $this->id_contact = $id_contact;
    }

    /**
     * @return mixed
     */
    public function getCreatedAtContact()
    {
        return $this->created_at_contact;
    }

    /**
     * @param mixed $created_at_contact
     */
    public function setCreatedAtContact($created_at_contact)
    {
        $this->created_at_contact = $created_at_contact;
    }

    /**
     * @return int
     */
    public function getIdAnswer()
    {
        return $this->id_answer;
    }

    /**
     * @param int $id_answer
     */
    public function setIdAnswer($id_answer)
    {
        $this->id_answer = $id_answer;
    }

    /**
     * @return mixed
     */
    public function getCreatedAtAnswer()
    {
        return $this->created_at_answer;
    }

    /**
     * @param mixed $created_at_answer
     */
    public function setCreatedAtAnswer($created_at_answer)
    {
        $this->created_at_answer = $created_at_answer;
    }

    /**
     * @return mixed
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * @param mixed $importance
     */
    public function setImportance($importance)
    {
        $this->importance = $importance;
    }



}