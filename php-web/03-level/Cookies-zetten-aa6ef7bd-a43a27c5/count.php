<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>

    <h1>Welkom!</h1>

    <p>
        Je hebt deze pagina
        
        <?php
        if (isset($_COOKIE['bezoekjes'])) {
            $aantal_bezoekjes = $_COOKIE['bezoekjes'] + 1;
        } else {
            $aantal_bezoekjes = 1;
        }
        
            echo $aantal_bezoekjes;
            setcookie('bezoekjes', $aantal_bezoekjes, time() + 30 * 24 * 3600);
        ?>
        
        keer bezocht!

    </p>

</body>
</html>
