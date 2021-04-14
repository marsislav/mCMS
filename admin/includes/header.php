<?php 
  include "../includes/db.php"; 
  include "./functions.php"; 
  ob_start(); 
  session_start ();
 /*if (isset($_SESSION['user_role'])) {
   if ($_SESSION['user_role']!=="administrator") {
     header ("Location: ../index.php");
   }
 }*/
/* ONLY ON LOCAL - TO UNCOMMENT IN PROD if (!isset($_SESSION['user_role'])) {

     header ("Location: ../index.php");
   
 } */
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>mCMS 2.1 Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="css/mcms-admin.css" rel="stylesheet" />

    <!-- Custom Fonts -->
    <link
      href="font-awesome/css/font-awesome.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap"
      rel="stylesheet"
    />
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script
      type="text/javascript"
      src="https://www.gstatic.com/charts/loader.js"
    ></script>
  </head>

  <body>