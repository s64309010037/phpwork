<?php

    for($num = 5; $num >= 1;  $num--){
        echo $num;
        echo "<br>";
    }

    echo "<hr color='Gold'>";

    for($score = 10; $score <= 100; $score += 10){
        echo $score;
        echo "<br>";
    }

    echo "<hr color='Gold'>";

    for($multiple = 1; $multiple <= 12; $multiple ++){
        echo "10 x ".$multiple." = ".$multiple * 10;
        echo "<br>";
    }

    echo "<hr color='Gold'>";

    for ($row = 1; $row <= 5; $row++) {
        for($star = 1; $star <= $row; $star++){
            echo "*";
        }
        echo "<br>";
      }

      echo "<hr color='Gold'>";

      for ($row = 1; $row <= 5; $row++) {
        for($star = 5; $star >= $row; $star--){
            echo "*";
        }
        echo "<br>";
      }

      echo "<hr color='Gold'>";

      $num = 0;
      for ($row = 1; $row <= 5; $row++) {
        for($star = 1; $star <= $row; $star++){
           $num = $num + 1;
           echo $num." ";
        }
        echo "<br>";
      }
      echo "<hr color='Gold'>";






      
        ?>


