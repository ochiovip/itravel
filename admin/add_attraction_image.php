<?php

    include("../secure/condb.php");
    session_start();

    $a_id = $_POST["a_id"];
    $a_attrID = $_POST["a_attrID"];
    $createBy = $_SESSION["userMemberCode"];

    /*
    echo "This is add_attraction_image.php";
    die;
    */

    //Upload Additional Image File.
    $file_extension = pathinfo(basename($_FILES["additional_filename"]["name"]), PATHINFO_EXTENSION);
    $new_filename = "attr_img_".uniqid().".".$file_extension;
    $path = "../upload/attraction_attachment/";
    $path_filename = $path.$new_filename;
    $is_upload_success = move_uploaded_file($_FILES["additional_filename"]["tmp_name"], $path_filename);
    if($is_upload_success){
        //Insert image data to database.
        $sql_attachment = "INSERT INTO
                                attraction_attachment
                                (attrID,
                                filename,
                                date,
                                time,
                                createBy)VALUES('$a_attrID',
                                                '$new_filename',
                                                Now(),
                                                Now(),
                                                '$createBy'
                                                )
                            ";
        $result_attachment = mysqli_query($condb, $sql_attachment);

        //Redirect to...
        header("Location: frm_edit_attraction.php?id=".$a_id);

    }else{
        //Redirect to...
        header("Location: frm_edit_attraction.php?error=upload_error");
    }

?>