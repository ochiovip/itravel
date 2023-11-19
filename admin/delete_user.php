<?php

    include("../secure/condb.php");
    session_start();

    $id = $_GET["id"];

    // echo $id;die;

    $sql = "UPDATE users SET isActive = 0 WHERE id = '$id'";
    $result = mysqli_query($condb, $sql);

    if($result){
        // echo "ลบข้อมูลสำเร็จ";
        //Redirect
        header("Location: manage_users.php");
    }else{
        echo "ผิดพลาด, ไม่สามารถลบข้อมูลได้";
    }

?>