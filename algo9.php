<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No. 8</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="suhu" placeholder="Suhu fahrenheit">
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>

<?php


if (isset($_POST['submit'])) {

    $suhuF = $_POST['suhu'];
    $suhuC = $suhuF / 33.8;

    if($suhuC >= 300){
        echo "panas";
    }else if($suhuC >= 250){
        echo "dingin";
    }else{
        echo "normal";
    }
}