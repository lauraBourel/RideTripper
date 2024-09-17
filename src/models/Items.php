<?php
require_once 'models/Database.php';

class Item extends Database
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $quantity;
    public $id_category;


    public function register()
    {
        $query = "INSERT INTO `rtcb_items`(`name`, `description`, `price`, `quantity`, `id_category`) VALUES (:name,:description,:price,:quantity,:id_category)";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryExecute->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryExecute->bindValue(':price', $this->price, PDO::PARAM_STR);
        $queryExecute->bindValue(':quantity', $this->quantity, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_category', $this->id_category, PDO::PARAM_INT);
        return $queryExecute->execute();
    }













}
