<?php

  //Start session.
  session_start();

  //Check sesion.
  if(!$_SESSION["userMemberCode"]){
    session_destroy();
    header("Location: ../index.php");
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ระบบ I-Travel (Backend)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">หน้าแรก</a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-xs btn-danger mt-2" 
            href="logout.php" 
            class="nav-link"
            onclick="return confirm('คุณแน่ใจที่ต้องการออกจากระบบ ?');"
            >
            <i class="fa fa-sign-out-alt"></i> ออกจากระบบ</a>
      </li>
      
    </ul>
    
  </nav>
  <!-- /.navbar -->
