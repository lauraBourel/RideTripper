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
}