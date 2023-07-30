<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>

    <h1>Welkom!</h1>

    <p>
        Je hebt deze pagina
        
        <?php
        if (isset($_SESSION['gezien'])) {
            $aantal_bezoekjes = $_SESSION['gezien'] + 1;
        } else {
            $aantal_bezoekjes = 1;
        }
        
        echo $aantal_bezoekjes;
        $_SESSION['gezien'] = $aantal_bezoekjes;
        ?>
        
        keer bezocht!

    </p>

</body>
</html>
