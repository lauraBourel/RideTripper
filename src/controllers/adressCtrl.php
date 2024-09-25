<?php
session_start();
if (empty($_SESSION['id'])) header('Location: index.php');

require_once 'models/Adress.php';


$adressUser = new Adress();
$adressUser->id_users = $_SESSION['id'];
$adressData = $adressUser->getById();




