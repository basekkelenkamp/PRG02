<?php
require_once 'includes/db_connection.php';


if(isset($_POST['submit'])) {
    $name           = mysqli_escape_string($db, $_POST['name']);
    $companyName    = mysqli_escape_string($db, $_POST['companyname']);
    $email          = mysqli_escape_string($db, $_POST['email']);
    $phone          = mysqli_escape_string($db, $_POST['phone']);

} else {
    header('Location: Reserve.php');
    exit;
}

$startTijd = $_POST['starttijd'];
$eindTijd = $_POST['eindtijd'];
$date = $_POST['date'];


if($_POST['name'] =='') {
    header('Location: Reserve.php');
}

$query = "INSERT INTO reservations (starttijd, eindtijd, date, companyname, name, email, phone)
VALUES ('$startTijd', '$eindTijd', '$date', '$companyName', '$name', '$email', '$phone')";

mysqli_query($db, $query)
or die('Error: '.mysqli_error($db).' with query '.$query);


echo "Thank you for your reservation, $name!";

echo $name.' '.$companyName.' '.$email.' '.$phone;
