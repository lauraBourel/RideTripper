<?php
require_once 'models/Database.php';

class Adress extends Database
{
    public $id;
    public $street;
    public $number;
    public $city;
    public $country;
    public $id_users;


    public function register()
    {
        $query = "INSERT INTO `rtcb_adress_users`(`street`, `number`, `city`, `country`, `id_users`) VALUES (:street,:number,:city,:country,:id_users)";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':street', $this->street, PDO::PARAM_STR);
        $queryExecute->bindValue(':number', $this->number, PDO::PARAM_INT);
        $queryExecute->bindValue(':city', $this->city, PDO::PARAM_STR);
        $queryExecute->bindValue(':country', $this->country, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

    public function getById()
    {
        $query = "SELECT * FROM `rtcb_adress_users` WHERE `id_users` = :id";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id_users, PDO::PARAM_INT);
        $queryExecute->execute();
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
}
