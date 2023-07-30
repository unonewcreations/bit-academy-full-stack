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
    <title>Forum Registratie</title>
</head>
<body>



<section class="body">

<h1>FORUM REGISTRATION</h1>

    <div class="container">

        <form action="registratie_handler.php" method="POST">
            
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="username">
            
            <label for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="age">
        
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="e-mail">
        
            <input type="submit" value="Submit">
        
        </form>

    </div>
   
</section>


</body>
</html>
