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

        <h4>Which fruit do you like the least?</h4>
        <div>
            <label for="apple">Apple</label>
            <input type="radio" name="apple" id="apple">
        </div>
        <div>
            <label for="pear">Pear</label>
            <input type="radio" name="pear" id="pear">
        </div>
        <div>
            <label for="watermelon">Watermelon</label>
            <input type="radio" name="watermelon" id="watermelon">
        </div>
        <div>
            <label for="mango">Mango</label>
            <input type="radio" name="mango" id="mango">
        </div>
        <div>
            <label for="pineapple">Pineapple</label>
            <input type="radio" name="pineapple" id="pineapple">
        </div>
    </form>
    <?php
        
    ?>
</body>

</html>