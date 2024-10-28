<?php
session_start();
if (empty($_GET['id'])) header('Location: /');

require_once 'models/Items.php';

$oneItem = new Item();
$oneItem->id = $_GET['id'];
$oneItemData = $oneItem->getById();
