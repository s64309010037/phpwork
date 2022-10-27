<?php

    $wi = $_POST['wide'];
    $lo = $_POST['long'];

    $area = $wi * $lo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
body 
    .a {
        color: #CC00FF;
    }
</style>
<center>
    <hr color="purple">
    <br>
    <h2 class="a">สูตรพื้นที่สี่เหลี่ยมผืนผ้า </h2>
    <br>
    <hr color="purple">
    <p style="font-size: 20px">
        <?php
        echo "ความกว้าง : ".$wi;
        echo "<br>";
        echo "ความยาว : ".$lo;
        echo "<br>";   
        echo "มีพื้นที่สี่เหลี่ยมผืนผ้า ทั้งหมด  ".$area."  ตารางเซนติเมตร";
        ?>
    </p>
</center>
</body>
</html>