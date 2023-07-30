<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
    
<h3>Piramide</h3>
    
<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">

<?php
// buiten loop
for ($i = 0; $i <= 8; $i++) {
    echo "<tr>";
    // binnen loop output buiten loop
    for ($j = 0; $j <= $i; $j++) {
        echo "<td height=30px width=30px bgcolor=#000></td>";
    }
    echo "</tr>";
}
?>

</table>

</body>
</html>