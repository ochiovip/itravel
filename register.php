<?php

    include("secure/condb.php");

    $username = $_POST["username"];

    $password = $_POST["password"];

    $email = $_POST["email"];

    $userPrefix = $_POST["userPrefix"];

    $userFirstname = $_POST["userFirstname"];

    $userLastname = $_POST["userLastname"];

    ///Member Code
    $sql_count_user_id = "SELECT MAX(id) AS currMemCode FROM users";
    $result_count_user_id = mysqli_query($condb, $sql_count_user_id);
    $currentMemberCode = mysqli_fetch_array($result_count_user_id);
    $userMemberCode = "m-".date("ymd")."-".$currentMemberCode["currMemCode"]+1;
    // echo $userMemberCode;
    // die;

    //Insert data to database...
    $sql = "INSERT INTO users
                (username, 
                    password, 
                    userPrefix, 
                    email,
                    userMemberCode,
                    userFirstname,
                    userLastname,
                    roleID,
                    dateCreate,
                    timeCreate,
                    createBy
                )VALUES('$username',
                            '$password',
                            '$userPrefix',
                            '$email',
                            '$userMemberCode',
                            '$userFirstname',
                            '$userLastname',
                            100,
                            Now(),
                            Now(),
                            '$userMemberCode')";

    $result = mysqli_query($condb, $sql);

    if($result){
        echo "บันทึกข้อมูลสำเร็จ";
    }else{
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }

?>