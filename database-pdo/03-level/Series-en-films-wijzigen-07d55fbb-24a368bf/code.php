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
