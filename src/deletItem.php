<?php
session_start();

if (empty($_SESSION['id']) || empty($_GET['id'])) {
    header('Location: index.php');
}

require 'models/Items.php';

$item = new Item();
$item->id = $_GET['id'];

$deletItem = $item->delete();
header('Location: index.php');
