<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form method="post">
    <input type="number" name="height" placeholder="Height">
    <input type="number" name="weight" placeholder="Weight">
    <input type="submit">
</form>

<?php
function BMI() {
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $outcome = $weight / ($height * $height);
    echo $outcome;

}

?>

</body>
</html>