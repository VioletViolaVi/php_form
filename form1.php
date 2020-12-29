<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>

<body>
    <h1>Practice php Forms</h1>

    <h2>Intro Form</h2>
    <a href="form1.php">Reset</a>

    <form method="GET" action="form1_confirmation.php">
        <input type="text" name="fname" placeholder="first name">
        <input type="text" name="lname" placeholder="last name">
        <button type="submit">submit</button>
    </form>

    <br>

    <h2>Interests Form</h2>
    <a href="form1.php">Reset</a>

    <form method="GET">
        <label for="favColour">What's your favourite colour?</label>
        <input type="text" name="favColour" id="favColour">
        <br>

        <label for="favHobby">What's your favourite hobby?</label>
        <input type="text" name="favHobby" id="favHobby">
        <br>

        <label for="favCar">What's your favourite car?</label>
        <input type="text" name="favCar" id="favCar">
        <br>

        <button type="submit">submit</button>
    </form>

    <?php
        echo "<h3>Your Answers:</h3>";

        echo "Your favourite colour is: " . $_GET["favColour"];
        echo "<br>";
        
        echo "Your favourite hobby is: " . $_GET["favHobby"];
        echo "<br>";

        echo "Your favourite car is: " . $_GET["favCar"];
        echo "<br>";
    ?>
</body>

</html>