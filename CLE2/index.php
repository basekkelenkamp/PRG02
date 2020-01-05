<?php
//Laadt de db_connection.
require_once "includes/db_connection.php";

//De query om een tabel uit de database te halen.
$querySlots = "SELECT * FROM open_slots";
$queryReservations = "SELECT * FROM reservations";

//Vraagt de tabel op uit de database met de query.
$resultSlots = mysqli_query($db, $querySlots)
or die('Error: Er gaat iets mis met de query.'.mysqli_error($db).' with query '.$querySlots);

$resultReservations = mysqli_query($db, $queryReservations)
or die('Error: Er gaat iets mis met de query.'.mysqli_error($db).' with query '.$queryReservations);

// Array Initialisatie.
$openSlots = [];
$reservations = [];

//Vult de arrays met de tabellen van de database.
while($row = mysqli_fetch_assoc($resultSlots))
{   $openSlots[] = $row;    }
while($row = mysqli_fetch_assoc($resultReservations))
{    $reservations[] = $row;    }

//Sluit de database af.
mysqli_close($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connect Holland Reservation Page</title>
    <link href="css/styles1.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="homepagebuttons">
    <a href="Reserve.php" class="button reserve-button">Reserve</a>
    <a href="Cancel.html" class="button cancel-button">Cancel</a>
</div>
        <footer>
            <h2>Taken reservation slots</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Dag</th>
                            <th>Tijd</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td colspan="2">&copy; Taken reservation slots</td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($openSlots as $slots)
                        {
                        //checked if taken of niet.
                        if($slots['taken'] =='1'){

                        //Start tijd
                        //preg_split = split een string in een array verdeeld over ":".
                        $startTijdTemp = $slots['starttijd'];
                        $startTijd = preg_split("~:~", "$startTijdTemp");

                        //Eind tijd
                        $eindTijdTemp = $slots['eindtijd'];
                        $eindTijd = preg_split("~:~", "$eindTijdTemp");
                        // Start/eind tijd[0] = uren
                        // Start/eind tijd[1] = minuten
                        ?>
                    <tr>
                        <td><?= $slots['date'];?></td>
                        <td><?= $startTijd[0].":".$startTijd[1];?> tot <?= $eindTijd[0].":".$eindTijd[1];?></td>
                    </tr>
                    <?php }}; ?>
                    </tbody>
                </table>
            <div class="info">
                <h2>Information</h2>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda commodi, explicabo facilis illum iure molestiae natus nulla odit perferendis quas quia rem sunt veniam voluptas! Libero possimus veritatis voluptates.
            </div>
        </footer>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
