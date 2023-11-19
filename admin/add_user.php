<?php

    include("../secure/condb.php");
    session_start();

    // echo $_SESSION["userMemberCode"];
    // die;

    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $userPrefix = $_POST["userPrefix"];
    $userFirstname = $_POST["userFirstname"];
    $userLastname = $_POST["userLastname"];
    $createBy = $_SESSION["userMemberCode"];


    ///Member Code
    $sql_count_user_id = "SELECT MAX(id) AS currMemCode FROM users";
    $result_count_user_id = mysqli_query($condb, $sql_count_user_id);
    $currentMemberCode = mysqli_fetch_array($result_count_user_id);
    $userMemberCode = "m-".date("ymd")."-".$currentMemberCode["currMemCode"]+1;
    // echo $userMemberCode;
    // die;

    $sql = "INSERT INTO users
                        (username,
                            password,
                            email,
                            userMemberCode,
                            userPrefix,
                            userFirstname,
                            userLastname,
                            roleID,
                            regisTypeID,
                            dateCreate,
                            timeCreate,
                            createBy)VALUES('$username',
                                            '$password',
                                            '$email',
                                            '$userMemberCode',
                                            '$userPrefix',
                                            '$userFirstname',
                                            '$userLastname',
                                            '100',
                                            '2',
                                            Now(),
                                            Now(),
                                            '$createBy'
                            )";

     
    $result = mysqli_query($condb, $sql);

    if($result){
        echo "บันทึกข้อมูลสำเร็จ";
    }else{
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }


?>