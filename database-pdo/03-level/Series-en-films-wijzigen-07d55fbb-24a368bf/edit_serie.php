<?php

include('dbconn.php');

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
    <title>Edit Series</title>
</head>
<body>

<nav>
    <button class="btn-styled">
        <a class="btn-link" href="detail_serie.php?id=<?= $_GET['id'] ?>">Back to Details</a>
    </button>
</nav>

<h1>Edit Series Data</h1>
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

    <form action="detail_serie.php?id=<?= $_GET['id']; ?>" method="POST">
        
        <input type="hidden" name="id" value="<?= $result['id'] ?>">

        <label for="">Title</label>
        <input type="text" name="title" value="<?= $result['title']; ?>">

        <label for="">Rating</label>
        <input type="text" name="rating" value="<?= $result['rating']; ?>">
        
        <label for="">Awards</label>
        <input type="text" name="awards" value="<?= $result['has_won_awards']; ?>">

        <label for="">Seasons</label>
        <input type="text" name="seasons" value="<?= $result['seasons']; ?>">

        <label for="">Country</label>
        <input type="text" name="country" value="<?= $result['country']; ?>">

        <label for="">Language</label>
        <input type="text" name="language" value="<?= $result['spoken_in_language']; ?>">

        <label for="">Summary</label>
        <input type="text" name="summary" value="<?= $result['summary']; ?>">
        
        <button class="btn-update" type="submit" name="update_series_btn">Update</button>
    </form>
    
</body>
</html>
