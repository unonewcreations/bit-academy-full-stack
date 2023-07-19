<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Detail Movies</title>
</head>
<body>
    
    <h1>Detail Movies</h1>

    <h2><?php echo $_GET['title']; ?> </h2>

    <table class="styled-table">

    <thead>
        <tr>
            <th>Information</th>
            <th>Information</th>
        </tr>
    </thead>  
    
    <tbody>

        <tr>
            <td>Datum van uitkomst</td>
            <td><?php echo $_GET['released_at'];?></td>
        </tr>
        <tr>
            <td>Land van uitkomst</td>
            <td><?php echo $_GET['country_of_origin'];?></td>
        </tr>
        <tr>
            <td>Duur</td>
            <td><?php echo $_GET['length_in_minutes'] . " minuten";?></td>
        </tr>

    </tbody>
</table>

<h2>Beschrijving</h2>
    <p>
    
    <?php
    echo $_GET['summary'];      
    ?>
    
    </p>

<h2>Trailer</h2>

<?php
$foo = $_GET['youtube_trailer_id'];
?>

<iframe src="http://www.youtube.com/embed/<?php echo $foo ?>" frameborder="0" width="400"
  height="300"></iframe>


</body>
</html>
