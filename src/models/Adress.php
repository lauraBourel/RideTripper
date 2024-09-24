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
        $query = "INSERT INTO `rtcb_adress_users`(`id`, `street`, `number`, `city`, `country`, `id_users`) VALUES (:id,:street,:number,:city,:country,:id_users)";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':street', $this->street, PDO::PARAM_BOOL);
        $queryExecute->bindValue(':number', $this->number, PDO::PARAM_INT);
        $queryExecute->bindValue(':city', $this->city, PDO::PARAM_STR);
        $queryExecute->bindValue(':country', $this->country, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        return $queryExecute->execute();
    }



























}