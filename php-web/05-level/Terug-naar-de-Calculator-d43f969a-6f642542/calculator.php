<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono&display=swap" rel="stylesheet">
    <title>Calculator</title>
</head>

<?php
$firstNum = "";
$secondNum = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstNum = $_POST['firstNum'];
    $secondNum = $_POST['secondNum'];
    $operator = $_POST['calculate'];
    $result = "";

    // validation begins here
    try {
        if (filter_var($firstNum, FILTER_VALIDATE_FLOAT) === false || filter_var($secondNum, FILTER_VALIDATE_FLOAT) === false) {
            throw new Exception("The input value is not a number!");
        } elseif ($firstNum == '' || $secondNum == '') {
            throw new Exception("The input values are required.");
        } elseif ($operator == "Divide" && ($firstNum == 0 || $secondNum == 0)) {
            throw new Exception("Division by zero is not allowed!");
        } elseif ($operator == "Modulo" && ($firstNum == 0 || $secondNum == 0)) {
            throw new Exception("Division by zero is not allowed!");
        } else {
            // calculation begins here
            switch ($operator) {
                case "Add":
                    $result = $firstNum + $secondNum;
                    break;
                case "Substract":
                    $result = $firstNum - $secondNum;
                    break;
                case "Multiply":
                    $result = $firstNum * $secondNum;
                    break;
                case "Divide":
                    $result = $firstNum / $secondNum;
                    break;
                case "Modulo":
                    $result = fmod($firstNum, $secondNum);
                    break;
            }
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}

?>

<body>

<section class="body">

<h1>CALCULATOR</h1>

    <div class="container">

        <form action="" method="POST">

            <!-- input fields and show value -->
            <p>
                <label for="firstNum"><strong>Number 1:</strong></label>
                <input type="text" name="firstNum" id="firstNum" placeholder="first number here" value="<?php echo $firstNum;?>">
            </p>
            
            <!-- input fields and show value -->
            <p>
                <label for="secondNum"><strong>Number 2:</strong></label>
                <input type="text" name="secondNum" id="secondNum" placeholder="second number here" value="<?php echo $secondNum;?>">
            </p>

            <!-- operator types -->
            <input type="submit" name="calculate" value="Add">
            <input type="submit" name="calculate" value="Substract">
            <input type="submit" name="calculate" value="Multiply">
            <input type="submit" name="calculate" value="Divide">
            <input type="submit" name="calculate" value="Modulo">
            
            <!-- diplay results and errors-->
            <?php

            if (isset($result) && is_numeric($result)) {
                echo "<p> <strong>Operator:</strong> {$_POST['calculate']} </p>";
                echo "<p> <strong>Result:</strong> {$result} </p>";
            }

            if (isset($e)) {
                echo "<p> <strong>Error:</strong> {$e->getMessage()} </p>";
            }

            ?>
            

        </form>

    </div>

</section>



</body>
</html>
