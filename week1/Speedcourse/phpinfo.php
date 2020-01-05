<?php

$albums = [
    [
        'title' => 'The greatest hits',
        'tracks' => 1
    ],
    [
        'title' => 'The greatest hits',
        'tracks' => 12
    ]
];

echo $albums[1]['tracks'];

for ($i = 0 ; $i < count($albums); $i++){
    echo $albums[$i]['title'];
    echo $albums[$i]['tracks'];
}



