<?php

    $prefix = $_POST['prefix'];

    // if($prefix == 'นาย'){
    //     echo "ผู้ชาย";
    // }elseif($prefix == 'นาง'){
    //     echo "ผู้หญิง";
    // }
    // elseif($prefix == 'นางสาว'){
    //     echo "ผู้หญิง";
    // }elseif($prefix == 'เด็กชาย'){
    //     echo "ผู้ชาย";
    // }else{
    //     echo "ผู้หญิง";
    // }


    switch ($prefix) {
        case 'นาย':
            echo "ผู้ชาย";
            break;
        case 'เด็กชาย':
            echo "ผู้ชาย";
            break;
        case 'นาง':
            echo "ผู้หญิง";
            break;
        case 'นางสาว':
            echo "ผู้หญิง";
            break;
        default:
            echo "ผู้หญิง";
            break;
    }


?>