<?php
//$album = [
//    'title' => 'The greatest hits',
//    'artist' => 'Madonna'
//];
// STAP 1 db connection
$db = mysqli_connect(
    'localhost',
    'root',
    '',
    'music_collection');

$query = "SELECT * FROM albums WHERE id = 3";

// geeft tabel terug!!!!!!!!!!!!!!!!!!!!!!!!!
// NIET VERGETEN!!!
// IETS MET HAMER!!!
$result =  mysqli_query($db, $query);

// maakt een associatieve array
$album = mysqli_fetch_assoc($result);



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detailpagina</title>
</head>
<body>
    <h2>Details - <?= $album['name']?></h2>
    <ul>
        <li>Titel - <?= $album['name'] ?></li>
        <li>Artiest - <?= $album['artist'] ?></li>
    </ul>
</body>
</html>
