<?php
    $m = $_POST['numply'];

    $multiple = 1;
    echo "<h3 >สูตรคูณ แม่ ".$m."</h3>";
    while($multiple <= 12){
        echo "<span>".$m." x ".$multiple." = ".$multiple * $m."</span>"; 
        echo "<br>";
        $multiple ++;
        echo "<meta http-equiv='refresh' content='10; url=multiply.html'>";

    }

?>
