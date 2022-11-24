<?php

    $num = 5;

    while($num >= 1){
        echo $num;
        echo "<br>";
        $num--;
    }
    echo "<hr color='pink'>";

    $score = 10;
    while($score <= 100){
        echo $score;
        echo "<br>";
        // $score = $score + 10;
        $score += 10;
    }

    echo "<hr color='pink'>";
    //แสดงสูตรคูณแม่ 10 ตั้งแต่ 10x10 ถึง 10x12
    // 10 x 1 = 10
    // 10 x 2 = 20
    //....
    // 10 x 12 = 120

    $multiple = 1;
    while($multiple <= 12){
        echo "10 x ".$multiple." = ".$multiple * 10;
        echo "<br>";
        $multiple ++;
    }
    echo "<hr color='pink'>";

?>