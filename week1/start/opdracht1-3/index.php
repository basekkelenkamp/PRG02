<?php
//Multi dimensional array with the music collection data
$musicAlbums =[
    [
        'artist' => 'Depeche Mode',
        'album' => 'Violator (Deluxe)',
        'year' => 1990,
        'tracks' => 15,
        'genre' => 'Electronic'
    ],
    [
        'artist' => 'The Jesus and Mary Chain',
        'album' => 'Psychocandy (Expanded Version)',
        'year' => 1985 ,
        'tracks' => 27,
        'genre' => 'Alternative Rock'
    ],
    [
        'artist' => 'My Bloody Valentine',
        'album' => 'Loveless',
        'year' => 1991,
        'tracks' => 11,
        'genre' => 'Shoegaze'
    ],
    [
        'artist' => 'Deafheaven',
        'album' => 'Ordinary Corrupt Human Love',
        'year' => 2018,
        'tracks' => 7,
        'genre' => 'Black Metal'
    ],
    [
        'artist' => 'Aphex Twin',
        'album' => 'Drukqs',
        'year' => 2001,
        'tracks' => 30,
        'genre' => 'Electronica'
    ],
    [
        'artist' => 'A Place to Bury Strangers',
        'album' => 'Pinned',
        'year' => 2018,
        'tracks' => 12,
        'genre' => 'Noise Rock'
    ],
    [
        'artist' => 'The Beach Boys',
        'album' => 'Smiley Smile',
        'year' => 1967,
        'tracks' => 11,
        'genre' => 'Rock'
    ],
    [
        'artist' => 'Slowdive',
        'album' => 'Souvlaki',
        'year' => 1994,
        'tracks' => 19,
        'genre' => 'Shoegaze'
    ],
    [
        'artist' => 'The Velvet Underground',
        'album' => 'White Light / White Heat',
        'year' => 1968,
        'tracks' => 6,
        'genre' => 'Proto-Punk'
    ],
    [
        'artist' => 'The Smashing Pumpkins',
        'album' => 'Siamese Dream',
        'year' => 1993,
        'tracks' => 13,
        'genre' => 'Alternative Rock'
    ]

];

// Initialize album count start
$x = 1;


// -------------------- les ---------------


$album = $musicAlbums[0]; //album is nu een eendimentionale array geworden
echo $album['year'];

//of

echo $musicAlbums[0]['year'];

foreach ($musicAlbums as $albumCollection){   //hij loopt musicAlbums door, en stopt alle info van een array item in musicAlbums tijdelijk in een
                                             // variable. hierna, gaat hij naar het volgende item in de array, en word de data in het variable overschreden.
    echo $albumCollection['artist'];         // hij pakt alleen 1 item uit de musicAlbums array per keer, dus het is geen multidimentional array meer.
    echo $albumCollection['album'];
};

// index is de index van de array.
foreach ($musicAlbums as $index => $album){
    echo $index;
    echo $album['artist'];
    echo $album['album'];
    echo $album['year'];
    echo $album['tracks'];
    echo $album['genre'];
}

//print_r($musicAlbums);  =  hiermee print je de gehele array (voor debuggen)



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Music Collection</title>
    <link rel="stylesheet" type="text/css" href="css/style2.css"/>
</head>
<body>
<h1>Music Collection</h1>
<hr/>
<table>
    <thead class="title-albuminfo">
    <tr>
        <th>#</th>
        <th>Artist</th>
        <th>Album</th>
        <th>Genre</th>
        <th>Year</th>
        <th>Tracks</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <td colspan="6">&copy; My Collection</td>
    </tr>
    </tfoot>
    <tbody>
    <!--        Loop through all albums in the collection-->
<?php foreach ($musicAlbums as $album){?>
    <tr>
        <td><?= $x++?></td>
        <td><?= $album['artist'];?></td>
        <td><?= $album['album'];?></td>
        <td><?= $album['genre'];?></td>
        <td><?= $album['year'];?></td>
        <td><?= $album['tracks'];?></td>
    </tr>
    <?php }; ?>
    </tbody>
</table>
</body>
</html>
