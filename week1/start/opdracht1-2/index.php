<?php
//technisch ontwerp

//goedenacht
// 0, 1, 2, 3, 4, 5

//goedemorgen
//6, 7, 8, 9, 10, 11

//goedemiddag
// 12, 13, 14, 15, 16, 17


$today = date("G");
if($today < 6){
    $timedGreeting = "Goedenacht";
} elseif($today < 12){
    $timedGreeting = "Goedemorgen";
} elseif($today < 18){
    $timedGreeting = "Goedemiddag";
} elseif($today < 24){
    $timedGreeting = "Goedenavond";
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Programmeren 2 - Week 1 - Opdracht 1.2</title>
</head>
<body>
<h1>Opdracht 1.2</h1>
<hr/>

<h2>Begroeting op basis van het moment van de dag</h2>
<p>
<?= "$timedGreeting, welkom op mijn pagina!" ?>
</p>
</body>
</html>
