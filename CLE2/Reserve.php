<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation Page</title>
    <link rel="stylesheet" href="css/styles1.css">
</head>
<body>
<form id="regForm" action="reserve_succes.php" method="post">
    <h1>Reserve</h1>
    <div class="reservation-form">
            <label for="name">Name: </label>
            <input id="name" type="text" name="name" required="name" placeholder="Your name.." /><br>

            <label for="companyname">Company: </label>
            <input id="companyname" type="text" name="companyname" placeholder="Your company.." /><br>

            <label for="email">Email: </label>
            <input id="email" type="email" name="email" required="email" placeholder="Your email.." /><br>

            <label for="phone">Phone: </label>
            <input id="phone" type="text" name="phone" required="phone" placeholder="Your phone number.." /><br>

            <label for="date">Date: </label>
            <input id="date" type="date" name="date" required="date" placeholder="Date.." /><br>

            <label for="starttijd">Start time: </label>
            <input id="starttijd" type="time" name="starttijd" step="900" required="time" placeholder="Start time.." /><br>

            <label for="eindtijd">End time: </label>
            <input id="eindtijd" type="time" name="eindtijd" step="900" required="time" placeholder="end time.." /><br>
    </div>
    <div class="reservation-submit"><br>
        <input type="submit" name="submit" value="Submit">
    </div>
</form>
</body>
</html>