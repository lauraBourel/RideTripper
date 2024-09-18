<?php
session_start();
if (empty($_SESSION['id'])) header('Location: login.php');

require 'models/User.php';

$user = new User();
$user->id = $_SESSION['id'];
$dataUser = $user->getById();
