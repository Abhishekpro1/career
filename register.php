<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Career Upgrade</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Career,Career Upgrade" />
    <link rel="icon" href="images/img1.png" type="image/png" sizes="16x16">
      <style type="text/css">
        .toggle{
            background-color:#3232de;
        }
         .toggle:hover {
        color: #fff;
        background-color: #3369e7;
    }
     </style>
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
                    <div class="form-w3layouts-grid">
                        <form action="#" method="post" class="newsletter">
                            <input class="search" type="search" placeholder="Search..." required="">
                            <button class="form-control btn" value=""><span class="fa fa-search"></span></button>
                        </form>
                    </div>
                </div>
                <div class="forms mt-md-0 mt-2" style="margin-top:30px ">
                    <a href="logout.php" class="btn" style="margin-top:30px "><span class="fa fa-user-circle-o"></span> Log-out</a>
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
                        <a href="#">Career Library<span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="10th.php" class="drop-text">After 10<sup>th</sup></a></li>
                            <li><a href="12th.php" class="drop-text">After 12<sup>th</sup></a></li>
                            <li><a href="graduation.php" class="drop-text">After Graduation</a></li>
                        </ul>
                    </li>
                    <li><a href="placement.php">Placement</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
        <style>
        .background_image_login{
        background-image: url('images/login5.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        height: 100%;
        font-family: 'Numans', sans-serif;
        }

        .container_login{
            padding-bottom: 10%;
            padding-top: 10%;
        height: 100%;
        align-content: center;
        }

        .card{
        height: 500px;
        margin-top: auto;
        margin-bottom: auto;
        width: 500px;
        background-color: rgba(0,0,0,0.5) !important;
        }

        .social_icon span{
        font-size: 60px;
        margin-left: 10px;
        color: dodgerblue;
        }

        .social_icon span:hover{
        color: white;
        cursor: pointer;
        }

        .card-header h3{
        color: white;
        }

        .social_icon{
        position: absolute;
        right: 20px;
        top: -45px;
        }

        .input-group-prepend span{
        width: 50px;
        background-color: dodgerblue;
        color: black;
        border:0 !important;
        }

        input:focus{
        outline: 0 0 0 0  !important;
        box-shadow: 0 0 0 0 !important;

        }

        .remember{
        color: white;
        }

        .remember input
        {
        width: 20px;
        height: 20px;
        margin-left: 15px;
        margin-right: 5px;
        }

        .login_btn{
        color: black;
        background-color: dodgerblue;
        width: 100px;
        }

        .login_btn:hover{
        color: black;
        background-color: white;
        }

        .links{
        color: white;
        }

        .links a{
        margin-left: 4px;
        }
        </style>
<section class="background_image_login">
    <div class="container_login">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action="server.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="name"required>
						
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>                           
                        </div>
						<input type="text" class="form-control" placeholder="email" name="email"required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" class="form-control"  id="myInput" placeholder="password" name="password" required>
                        <div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-eye"  onclick="myFunction1()"></i></span>
						</div>
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-phone"></i></span>
						</div>
						<input type="digits" class="form-control" placeholder="number" name="number"required>
						
					</div>
                     <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-calendar"></i></span>                           
                        </div>
						<input type="text" class="form-control" placeholder="date of birth" name="date_of_birth"required>
						
					</div>
                     
					<div class="row align-items-center remember">
						<input type="checkbox" required="click">I agree <a href="#">terms</a> and <a href="#">conditions</a>.
				</div> 
					<div class="form-group">
						<input type="submit" value="Submit" class="btn float-right login_btn" name="sign_up">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					I have an account, <a href="login.php">Sign In</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</section>
  
    <?php
            include("footer.php");
        ?>
    <script>
                function myFunction1() 
            {
                var x = document.getElementById("myInput");
                if (x.type === "password") 
                {
                x.type = "text";
                } 
                else 
                {
                    x.type = "password";
                }
            }
        </script>
