<?php
$hn = "localhost";
// this will be changed to  your username
$un = "hayley";
// this will be your user password
$pw = "y[V5!ObQvHDf*swj";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connectiot70twhzAkjL@ovjIn
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>