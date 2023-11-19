<?php

    $condb = mysqli_connect("127.0.0.1", "root", "", "itravel");
    mysqli_set_charset($condb, "utf8");

    if($condb){
        // echo "สามารถเชื่อมต่อฐานข้อมูลได้";
    }else{
        echo "ผิดพลาด, ไม่สามารถเชื่อมต่อฐานข้อมูล";
    }

?>