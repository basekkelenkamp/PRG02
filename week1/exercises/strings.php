<?php
// complete the following statements
$firstName = 'Bas';
$lastName = 'Ekkelenkamp';

// Put both variables together and separate them with a space in one single statement
$myName = "$firstName $lastName";

// URI to use in the link
$url = 'http://howmanyofme.com/';
?>
<!doctype html>
<html lang=en>
<head>
    <meta charset="UTF-8">
    <title>Strings</title>
</head>
<body>
<section>
    <h1>My name</h1>
    <p><?= $myName ?></p>
    <p>
        <!--Add the variables $myName and $url to the link-->
        <a href="<?="$url"?>">Link to </a>
    </p>
</section>
</body>
</html>
