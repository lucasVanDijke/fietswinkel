<?php 
include ("fiets.php");
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $fiets = $_SESSION["fiets"];
    echo $fiets->getMerk();
    ?>
    
</body>
</html>