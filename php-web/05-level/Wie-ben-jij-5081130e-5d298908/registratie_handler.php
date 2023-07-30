<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Registratie Handler</title>
</head>
<body>

<section class="body">

    <h2>
    <?php
    //Retrieve name from query string and store to a local variable
    $name = $_POST['username'];
    echo "Jouw username is $name";
    ?>
    </h2>
    
    <h2>
    <?php
    //Retrieve age from query string and store to a local variable
    $age = $_POST['age'];
    echo "<h2> Jouw leeftijd is $age </h2>";
    ?>
    </h2>

    <h2>
    <?php
    //Retrieve email from query string and store to a local variable
    $email = $_POST['email'];
    echo "<h2> Jouw email is $email </h2>";
    ?>
    </h2>

</section>


</body>
</html>
