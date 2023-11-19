<?php

    include("../secure/condb.php");
    session_start();

    // echo $_SESSION["userMemberCode"];
    // die;

    $id = $_POST["id"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $userPrefix = $_POST["userPrefix"];
    $userFirstname = $_POST["userFirstname"];
    $userLastname = $_POST["userLastname"];
    $updateBy = $_SESSION["userMemberCode"];
    
    /*
    echo $id;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $userPrefix;
    echo "<br>";
    echo $userFirstname;
    echo "<br>";
    echo $userLastname;
    echo "<br>";
    */

    $sql = "UPDATE 
                users 
                SET 
                    username = '$username',                
                    password = '$password',
                    email = '$email',
                    userFirstname = '$userFirstname',
                    userLastname = '$userLastname',
                    dateUpdate = Now(),
                    timeUpdate = Now(),
                    updateBy = '$updateBy'
                WHERE id = '$id'
                    ";
    
    $result = mysqli_query($condb, $sql);

    if($result){
        echo "บันทึกข้อมูลสำเร็จ";
    }else{
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }


?>