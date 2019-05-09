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
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
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
        height: 370px;
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
</head>
     <?php
        include("config.php");

        if(isset($_POST['login']))
        {
            $user_id = $_POST['user_id'];
            $email = $_POST['email'];	
            $password = $_POST['password'];
            $query = mysqli_query($con, "SELECT * FROM users where email = '$email' and password = '$password'");
            if(mysqli_num_rows($query)>0)
            {
                $row = mysqli_fetch_array($query);
                session_start();
                $_SESSION['user_id'] = $row['user_id'];
                $_SESSION['email'] = $row['email'];
                header("location: index.php");
            }
            else
            {
                // echo "Invalid Username/Password";
                echo "<script>alert('Invalid Useremail/Password')</script>";
            }
        }

    ?>

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
   
<section class="background_image_login">
    <div class="container_login">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fa fa-facebook-square"></i></span>
					<span><i class="fa fa-google-plus-square"></i></span>
					<span><i class="fa fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
                
				<form  method="post" name="validate" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-envelope"></i></span>   
						</div>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" required="@" name="email" autocomplete="on">
						
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
					
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="login">
                        <a href="forget.php" class="">Sign Up</a>
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
 
    <!-- footer -->
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