<?php

    include("../secure/condb.php");
    session_start();

    $id = $_GET["id"];
    $a_id = $_GET["a_id"];

    //Get image filename.
    $sql1 = "SELECT filename FROM attraction_attachment WHERE id = '$id'";
    $result1 = mysqli_query($condb, $sql1);
    $row = mysqli_fetch_array($result1);
    $curr_filename = $row["filename"];
    
    //Remove image file.
    $file_for_delete = "../upload/attraction_attachment/".$curr_filename;
    unlink($file_for_delete);

    
    $sql = "DELETE FROM attraction_attachment WHERE id = '$id'";
    $result = mysqli_query($condb, $sql);

    if($result){
        //Redirect
        header("Location: frm_edit_attraction.php?id=".$a_id);
    }else{
        echo "ผิดพลาด, ไม่สามารถลบข้อมูลรูปภาพได้";
    }

?>