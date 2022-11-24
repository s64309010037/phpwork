<?php

    $num = 5;

    do{
        echo $num;
        echo "<br>";        
        $num--;
    }  while($num >= 1);
    
    echo "<hr color='red'>";

    $score = 10;
    do{
        echo $score;
        echo "<br>";
        // $score = $score + 10;
        $score += 10;
    } while($score <= 100);

    echo "<hr color='red'>";
    //แสดงสูตรคูณแม่ 10 ตั้งแต่ 10x10 ถึง 10x12
    // 10 x 1 = 10
    // 10 x 2 = 20
    //....
    // 10 x 12 = 120

    $multiple = 1;

    do{
        echo "10 x ".$multiple." = ".$multiple * 10;
        echo "<br>";
        $multiple ++;
    }
    while($multiple <= 12);
    echo "<hr color='red'>";

?>