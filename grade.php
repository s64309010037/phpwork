<?php
    $score = $_POST['qt'];
    $area = $_POST['qt'];
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
 #rcorners1 {
    color: #e1bee7;
    border-radius: 25px;
    background: #4a148c;
    padding: 20px; 
    width: 1400px;
    height: 100px;  
    }
    body {
        background: #e1bee7;
    }
</style>
<center>
        <div id="rcorners1">
        <h1>การตรวจสอบเกรดจากคะแนนที่ได้</h1></table></div>

    <center>  
    <br><br>
<?php
    echo "<font style='font-size:20px'> คะแนนของคุณ คือ ".$area."  คะแนน </font>";
    echo "<br>";      
    echo "<br>"; 
    if($score <= 49 ){
        echo "<font style='font-size:20px'> เกรดที่คุณได้คือ : E </font>";
    }elseif($score <= 59 ){
        echo "<font style='font-size:20px'> เกรดที่คุณได้คือ D </font>";
    }
    elseif($score <= 69 ){
        echo "<font style='font-size:20px'> เกรดที่คุณได้คือ C </font>";
    }elseif($score <= 79 ){
        echo "<font style='font-size:20px'> เกรดที่คุณได้คือ B </font>";
    }else{
        echo "<font style='font-size:20px'> เกรดที่คุณได้คือ A </font>"; 
    } 
    
    
?>
</center>
</body>
</html>