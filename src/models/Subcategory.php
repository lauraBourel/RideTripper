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
}
