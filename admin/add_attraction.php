<?php

    include("../secure/condb.php");
    session_start();

    // echo $_SESSION["userMemberCode"];
    // die;

    $attrName = $_POST["attrName"];
    $attrDetail = $_POST["attrDetail"];
    $provinceCode = $_POST["provinceCode"];
    $createBy = $_SESSION["userMemberCode"];

    //Generate Attraction Code
    $sql_count = "SELECT MAX(id) AS curr FROM attraction";
    $result_count = mysqli_query($condb, $sql_count);
    $current = mysqli_fetch_array($result_count);
    $attrID = "attr-".date("ymd")."-".$current["curr"]+1;

    //Upload Primary Image File.
    $file_extension = pathinfo(basename($_FILES["filename"]["name"]), PATHINFO_EXTENSION);
    $new_filename = "attr_img_".uniqid().".".$file_extension;
    $path = "../upload/attraction_attachment/";
    $path_filename = $path.$new_filename;
    $is_upload_success = move_uploaded_file($_FILES["filename"]["tmp_name"], $path_filename);
    if($is_upload_success){
        //Insert image data to database.
        $sql_attachment = "INSERT INTO
                                attraction_attachment
                                (attrID,
                                filename,
                                isFirstImage,
                                date,
                                time,
                                createBy)VALUES('$attrID',
                                                '$new_filename',
                                                1,
                                                Now(),
                                                Now(),
                                                '$createBy'
                                                )
                            ";
        $result_attachment = mysqli_query($condb, $sql_attachment);
    }else{
        //Redirect to...
        header("Location: frm_add_attraction.php?error=upload_error");
    }


    $sql = "INSERT INTO attraction
                        (attrName,
                        attrID,
                        attrDetail,
                        provinceCode,
                            dateCreate,
                            timeCreate,
                            createBy)VALUES('$attrName',
                                            '$attrID',
                                            '$attrDetail',
                                            '$provinceCode',
                                            Now(),
                                            Now(),
                                            '$createBy'
                            )";

     
    $result = mysqli_query($condb, $sql);

    if($result){
        //Reridect
        header("Location: manage_attractions.php?success=true");
    }else{
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }

?>