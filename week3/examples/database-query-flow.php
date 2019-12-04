<?php
//Credentials
$host = '';
$user = '';
$password = '';
$database = '';

//Create connection
$db = mysqli_connect($host, $user, $password, $database)
or die("Error: " . mysqli_connect_error());

//Create query for db & fetch result
$queryAll = "SELECT * FROM albums";
$result = mysqli_query($db, $queryAll);

//Create array & store results from db
$albums = [];
while ($row = mysqli_fetch_assoc($result)) {
    $albums[] = $row;
}

//Close connection
mysqli_close($db);
?>
<!doctype html>
<html>
<head>
    <title>Example queries</title>
    <meta charset="utf-8"/>
</head>
<body>
</body>
</html>
