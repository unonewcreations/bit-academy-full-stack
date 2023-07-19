<?php

include('dbconn.php');

if (isset($_POST['update_series_btn'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $rating = $_POST['rating'];
    $awards = $_POST['awards'];
    $seasons = $_POST['seasons'];
    $country = $_POST['country'];
    $language = $_POST['language'];
    $summary = $_POST['summary'];

    try {
        $query = "UPDATE series SET title=:title, rating=:rating, has_won_awards=:awards, seasons=:seasons, country=:country, spoken_in_language=:language, summary=:summary 
        WHERE id=:id LIMIT 1";

        $statement = $pdo->prepare($query);
        $data = [
            ":id" => $id,
            ":title" => $title,
            ":rating" => $rating,
            ":awards" => $awards,
            ":seasons" => $seasons,
            ":country" => $country,
            ":language" => $language,
            ":summary" => $summary
        ];

        $query_execute = $statement->execute($data);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>

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
    <nav class="flex">
        <button class="btn-styled">
            <a class="btn-link" href="index.php">Home</a>
        </button>

        <button class="btn-styled">
            <a class="btn-link" href="edit_serie.php?id=<?= $_GET['id'] ?>">Edit Details</a>
        </button>
    </nav>
    
    <h1>Detail Series</h1>

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM series WHERE id=:id LIMIT 1";
        $statement = $pdo->prepare($query);
        $data = [':id' => $id];
        $statement->execute($data);

        $result = $statement->fetch(PDO::FETCH_ASSOC);
    }

    ?>


    <h2><?= $result['title']; ?> </h2>

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
                <?php if ($result['has_won_awards'] === 1) {
                    echo "Ja"; 
                } else {
                    echo "Nee";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Seasons</td>
            <td><?= $result['seasons'];?></td>
        </tr>
        <tr>
            <td>Country</td>
            <td><?php echo $result['country'];?></td>
        </tr>
        <tr>
            <td>Language</td>
            <td><?= $result['spoken_in_language'];?></td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><?= $result['rating'];?></td>
        </tr>

    </tbody>
</table>

<h2>Summary</h2>
        <p>
            <?=
            $result['summary'];      
            ?>
    
        </p>


</body>
</html>
