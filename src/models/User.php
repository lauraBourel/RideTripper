<?php
require_once 'models/Database.php';

class User extends Database
{
    public $id;
    public $civility;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $birthday;
    public $phone;

    public function register()
    {
        $query = "INSERT INTO `rtcb_users`(`civility`,`firstname`, `lastname`, `email`, `password`,`birthday`,`phone_number`) 
        VALUES (:civility,:firstname,:lastname,:email,:password,:birthday,:phone_number);";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':civility', $this->civility, PDO::PARAM_BOOL);
        $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryExecute->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
        $queryExecute->bindValue(':birthday', $this->birthday, PDO::PARAM_STR);
        $queryExecute->bindValue(':phone_number', $this->phone, PDO::PARAM_STR);
        return $queryExecute->execute();
    }


    public function getByEmail(){
        $query = "SELECT * FROM `rtcb_users` WHERE `email` = :email"; 

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryExecute->execute();
        return $queryExecute->fetch(PDO::FETCH_OBJ);
    }


    public function delete()
    {
        $query = "DELETE FROM `rtcb_users` WHERE `id` = :id;";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        return    $queryExecute->execute();
    }
}
