<?php

    include("../secure/condb.php");
    session_start();

    // echo $_SESSION["userMemberCode"];
    // die;

    $id = $_POST["id"];
    $attrID = $_POST["attrID"];
    $attrName = $_POST["attrName"];
    $attrDetail = $_POST["attrDetail"];
    $old_first_image_filename = $_POST["old_first_image_filename"];
    $provinceCode = $_POST["provinceCode"];
    $updateBy = $_SESSION["userMemberCode"];
   
    if(is_uploaded_file($_FILES["filename"]["tmp_name"])){
        /*
        echo "uploaded";
        echo "<br>";
        echo $old_first_image_filename;
        die;
        */

        //Remove old file.
        $file_for_delete = "../upload/attraction_attachment/".$old_first_image_filename;
        unlink($file_for_delete);

        //Upload Primary Image File.
        $file_extension = pathinfo(basename($_FILES["filename"]["name"]), PATHINFO_EXTENSION);
        $new_filename = "attr_img_".uniqid().".".$file_extension;
        $path = "../upload/attraction_attachment/";
        $path_filename = $path.$new_filename;
        $is_upload_success = move_uploaded_file($_FILES["filename"]["tmp_name"], $path_filename);
        if($is_upload_success){
            //Insert image data to database.
            $sql_attachment = "UPDATE attraction_attachment
                                SET
                                    filename = '$new_filename',
                                    date = Now(),
                                    time = Now(),
                                    createBy = '$updateBy'
                                WHERE attrID = '$attrID'
                                ";
            $result_attachment = mysqli_query($condb, $sql_attachment);
        }else{
            //Redirect to...
            header("Location: frm_edit_attraction.php?id=$id"."&error=upload_error");
        }

    } //End of if condition.

    
    $sql = "UPDATE 
                attraction 
                SET 
                    attrName = '$attrName',                
                    attrDetail = '$attrDetail',
                    provinceCode = '$provinceCode',
                    dateUpdate = Now(),
                    timeUpdate = Now(),
                    updateBy = '$updateBy'
                WHERE id = '$id'
                    ";
                    
    
    $result = mysqli_query($condb, $sql);
    

    if($result){
        //Redirect to...
        header("Location: frm_edit_attraction.php?id=$id"."&success=true");
    }else{
        echo "ผิดพลาด, ไม่สามารถบันทึกข้อมูลได้...";
    }
    


?>