<?php

    include("secure/condb.php");
    session_start();

    $username = $_POST["username"];

    $password = $_POST["password"];

    /*
    echo $username;
    echo "<br>";
    echo $password;
    die;
    */

    //Retrieve inout data with database.
    $sql_check_auth = "SELECT 
                            a.*,
                            b.roleName 
                            FROM users AS a
                            LEFT JOIN role AS b 
                            ON a.roleID = b.roleID
                            WHERE a.username = '$username' 
                            AND 
                            a.password = '$password' 
                        -- AND
                        --     isActive <> 0
                        ";
    $result_check_auth = mysqli_query($condb, $sql_check_auth);

    /*
    print_r($result_check_auth);
    die;
    */

    //Check have uuser account.
    if($result_check_auth->num_rows >= 1){

        /*
        echo "Founded";
        die;
        */

        $userData = mysqli_fetch_array($result_check_auth);

        /*
        echo "<pre>";
        print_r($userData);
        echo"</pre>";
        die;
        */

        $userMemberCode = $userData["userMemberCode"];
        $userPrefix = $userData["userPrefix"];
        $userFirstname = $userData["userFirstname"];
        $userLastname = $userData["userLastname"];
        $email = $userData["email"];
        $roleID = $userData["roleID"];
        $roleName = $userData["roleName"];
        $isActive = $userData["isActive"];

        //Check user has active.
        if($isActive == 0){
            //Redirect
            header("Location: frm_login.php");
        }

        //Store data to session.
        $_SESSION["userMemberCode"] = $userData["userMemberCode"];
        $_SESSION["username"] = $userData["username"];
        $_SESSION["email"] = $userData["email"];
        $_SESSION["roleID"] = $roleID;
        $_SESSION["roleName"] = $roleName;
        $_SESSION["userPrefix"] = $userPrefix;
        $_SESSION["userFirstname"] = $userFirstname;
        $_SESSION["userLastname"] = $userLastname;

        //Test read the data from session.
        // echo $_SESSION["email"];
        // echo "<br>";
        // echo $_SESSION["userMemberCode"];
        // die;

        //Check premission by role.
        if($_SESSION["roleID"] == 100){ //User

            echo "สวัสดีผู้ใช้งานทั่วไปป...";

        }elseif($_SESSION["roleID"] == 300){ //Creator
            
        }elseif($_SESSION["roleID"] == 500){

        }elseif($_SESSION["roleID"] == 900){ //Administrator

            //Redirect
            header("Location: admin/main.php");

        }else{

            echo "Error, สิทธ์การเข้าใช้งานไม่ถูกต้อง...กรุณาลองใหม่";

        }
        

    }else{

        echo "Error, ไม่พบข้อมูลผู้ใช้งาน....";

    }

?>