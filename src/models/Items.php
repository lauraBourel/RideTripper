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
    public $id_subcategory;


    public function register()
    {
        $query = "INSERT INTO `rtcb_items`(`name`, `description`, `price`, `quantity`, `id_subcategory`) VALUES (:name,:description,:price,:quantity,:id_subcategory)";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':name', $this->name, PDO::PARAM_STR);
        $queryExecute->bindValue(':description', $this->description, PDO::PARAM_STR);
        $queryExecute->bindValue(':price', $this->price, PDO::PARAM_STR);
        $queryExecute->bindValue(':quantity', $this->quantity, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_subcategory', $this->id_subcategory, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

    public function getAll()
    {
        $query = "SELECT * FROM `rtcb_items`";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->execute();
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }

    public function getByCat()
    {
        $query = "SELECT * FROM `rtcb_items`
                LEFT JOIN `rtcb_subcategory` ON `rtcb_items`.`id_subcategory` = `rtcb_subcategory`.`id`
                WHERE `id_category` = :id_category";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id_category', $this->id_category, PDO::PARAM_INT);
        $queryExecute->execute();
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }

    public function getBySubCat()
    {
        $query = "SELECT * FROM `rtcb_items` WHERE `id_subcategory` = :id_subcategory";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id_subcategory', $this->id_subcategory, PDO::PARAM_INT);
        $queryExecute->execute();
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }
}
