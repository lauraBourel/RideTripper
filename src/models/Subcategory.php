<?php
require_once 'models/Database.php';

class Subcategory extends Database
{
    public $id;
    public $name;

    public function getAll()
    {
        $query = "SELECT * FROM `rtcb_subcategory`";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->execute();
        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSubCategoryById()
    {
        $query = "SELECT * FROM `rtcb_subcategory` WHERE `id` = :id";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryExecute->execute();
        return $queryExecute->fetch(PDO::FETCH_OBJ);
    }
}
