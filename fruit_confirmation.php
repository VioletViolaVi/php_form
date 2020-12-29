<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fruit Form Sent Confirmation</title>
    </head>
    
    <body>
        <?php
            echo "<h3>The fruit you like best is :</h3>";
            echo "<strong>" . $_POST["fruit"] . "<strong>";
        ?>
    </body>

</html>