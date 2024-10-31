<?php
// Start the session
session_start();

// Check if the user is logged in and if the item ID is present, if not redirect to the index page
if (empty($_SESSION['id']) || empty($_GET['id'])) {
    header('Location: index.php');
}

require 'models/Items.php';

// Create a new Item object and set its ID
$item = new Item();
$item->id = $_GET['id'];

// Delete the item
$deletItem = $item->delete();

// Redirect to the index page
header('Location: index.php');
