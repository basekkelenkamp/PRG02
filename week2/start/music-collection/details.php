<?php
// Include data (all albums)

require_once 'includes\music-data.php';

// IF index is not present in url or value is empty


// redirect to index.php


// Get index of album from url (GET)


// get album from albums collection


print_r($_GET);


if(isset($_GET['id'])) {
    $index = $_GET['id'];
    $album = $musicAlbums[$index - 1];
}
else {
    echo "de index bestaat niet!";
}


?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection - Details <?=$album['album'];?></title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<section>
    <h1><?=$album['album'];?></h1>
    <ul>
        <li>Artist: <?=$album['artist'];?></li>
        <li>Genre: <?=$album['genre'];?> </li>
        <li>Year: <?=$album['year'];?></li>
        <li>Tracks: <?=$album['tracks'];?></li>
    </ul>
</section>
<div>
    <a href="index.php">Go back to the list</a>
</div>
</body>
</html>









