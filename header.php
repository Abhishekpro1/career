<?php
    include("config.php");
    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    $con->query($sql); 
?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Career Upgrade</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Career,Career Upgrade" />
    <link rel="icon" href="images/logo_title.png" type="image/png" sizes="16x16">
      <style>
        .bgimg1 {
              color: whitesmoke;
              background-size: cover;
              background-image: url("images/10th_banner.jpg")  ;
              padding-top:10px;
              padding-bottom:5%;
              
                }
        #courses {
            margin-right: 10%;
            margin-left: 5%;
            text-align:center;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 0 auto;
            }

            #courses td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            padding-left: 10px;
            padding-right: 10px;
            }

            #courses tr:nth-child(even){background-color: #f2f2f2;}

            #courses tr:hover {background-color: #ddd;}

            #courses th {

              padding-top: 12px;
              padding-bottom: 12px;

              background-color:dodgerblue;
              color: white;
            }
    </style>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <!-- //Fonts -->
</head>

<body>
    <!-- //header -->
<header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                    <h1> <a href="index.php"><img src="images/logo_title.png" alt="" >Career Upgrade</a></h1>
                </div>
                <div class="search-form mx-md-auto" style="margin-top:30px ">
                    
                </div>
                <div class="forms mt-md-0 mt-2" style="margin-top:30px ">
                    <a href="logout.php" class="btn" style="margin-top:30px "><span class="fa fa-user-circle-o"></span> Log-Out</a>
                </div>
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle" style=""><span class="fa fa-bars"></span></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Career Library <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="career_library.php">Career Library<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="10th.php" class="drop-text">After 10<sup>th</sup></a></li>
                            <li><a href="12th.php" class="drop-text">After 12<sup>th</sup></a></li>
                            <li><a href="graduation.php" class="drop-text">After Graduation</a></li>
                        </ul>
                    </li>
                    <li><a href="placement.php">Placement</a></li>
                    <li><a href="e-books.html">E-books</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    