<?php

// Database initialisatie.
$host       = 'localhost';
$username   = 'root';
$password   = '';
$database   = 'connect_holland';

// Establish database connectie in het variable $db
$db = mysqli_connect($host, $username, $password, $database)
or die('Error: Database connectie failed, check db_connection.php of XAMPP.'.mysqli_connect_error());
