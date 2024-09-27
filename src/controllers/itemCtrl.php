<?php
session_start();

require_once 'models/Items.php';

$oneItem = new Item();
$oneItemData = $oneItem->getById();