<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>

<!-- header h1 -->
<h1>Bit Academy - Form</h1>

<!-- form -->
<form method="post" action="">
    <label for="email">Meld je aan voor onze nieuwsbrief.</label>
    <input type="text" name="email" placeholder="voer hier je email in!">
    <button type="submit" name="submit">Verzenden</button>
</form>

<!-- php script -->
<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
} else {
    exit;
}

// check id email is valid or not valid
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $show = "E-mail is geldig";
    header('Location: success.php');
} else {
    $show = "E-mail is ongeldig";
}
?>

<h2><?php echo $show ?></h2>

</body>
</html>
