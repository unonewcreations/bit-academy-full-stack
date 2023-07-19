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
    <title>Detail Series</title>
</head>
<body>
    
    <h1>Detail Series</h1>

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
            <td>Awards</td>
            <td>
                <?php if ($_GET['has_won_awards'] === 1) {
                    echo "Ja"; 
                } else {
                    echo "Nee";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Seasons</td>
            <td><?php echo $_GET['seasons'];?></td>
        </tr>
        <tr>
            <td>Country</td>
            <td><?php echo $_GET['country'];?></td>
        </tr>
        <tr>
            <td>Language</td>
            <td><?php echo $_GET['spoken_in_language'];?></td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><?php echo $_GET['rating'];?></td>
        </tr>

    </tbody>
</table>

<h2>Beschrijving</h2>
        <p>
            <?php
            echo $_GET['summary'];      
            ?>
    
        </p>


</body>
</html>
