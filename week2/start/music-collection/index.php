<?php
require_once 'includes\music-data.php';

$x = 0;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Music Collection - Week 2</title>
</head>
<body>
<h1>Music Collection</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Album</th>
                <th>Artist</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Tracks</th>
                <th>details</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td colspan="6">&copy; My Collection</td>
            </tr>
        </tfoot>
        <tbody>
        <?php foreach ($musicAlbums as $album){
            $x++;?>
            <tr>
                <td><?= $x;?></td>
                <td><?= $album['album']; ?></td>
                <td><?= $album['artist'];?></td>
                <td><?= $album['genre'];?></td>
                <td><?= $album['year'];?></td>
                <td><?= $album['tracks'];?></td>
                <td><a href="details.php?id=<?= $x; ?>">details</a></td>
            </tr>
        <?php }; ?>
        </tbody>
    </table>
</body>
</html>

