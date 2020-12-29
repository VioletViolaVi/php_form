<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Form Sent Confirmation</title>
</head>

<body>
    <?php
        echo $_GET["fname"] . " is my first name.";
        echo "<br>";
        echo $_GET["lname"] . " is my last name";
        echo "<br>";
        echo "Thank you for completing this form " . $_GET["fname"];
        echo "<br>";
    ?>
</body>

</html>