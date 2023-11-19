<?php

    include("../secure/condb.php");
    session_start();

    $id = $_GET["id"];

    // echo $id;die;

    $sql = "UPDATE attraction SET isActive = 0 WHERE id = '$id'";
    $result = mysqli_query($condb, $sql);

    if($result){
        //Redirect
        header("Location: manage_attractions.php");
    }else{
        echo "ผิดพลาด, ไม่สามารถลบข้อมูลได้";
    }

?>