<?php
    include("header.php");
?>
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
            color: white;
        }
        section{
            padding: 5rem 0;
        } 
        .heading{
            text-transform: uppercase;
            font-size: 40px;
            letter-spacing: 3px;
            margin-right: -3px;
            margin-bottom: 5rem;
            text-align: center;
            color: black;
            position: relative;
        }
        
        .cardbox{
            display: flex;
            align-items: center;
            align-content: center;
            flex-direction: column;
        }
        .card{
            width: 24rem;
            background-color: ghostwhite;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 2rem 0;
            box-shadow: .5rem .5rem 3rem rgba(0,0,0,0.2);
        }
        .card .card-img{
            width: 100%;
            height: 26rem;
            object-fit: cover;
            -webkit-clip-path: polygon(0 0,100% 0,100% 78%,0% 100%);
            clip-path:polygon(0 0,100% 0,78%,0% 100%);
        }
        .profile-img{
            width: 15rem;
            height: 15rem;
            object-fit: cover;
            border-radius: 50%;
            margin-top: -10rem;
            z-index: 999;
            border: 1rem solid white;
        }
        .about{
            font-size: 20px;
            margin: 1.5rem 0;
            text-align: center;
            color: black;
            font-family: "Roboto", sans-serif;
        }
        .card .btn{
            padding: 1rem 2.5rem;
            background-color: dodgerblue;
            border-radius: 2rem;
            margin: 1rem 0;
            text-transform: uppercase;
            color: ghostwhite;
            font-size: 25px;
            transition: all .5s;
        }
        .card .btn:hover{
            transform: translateY(-2px);
            box-shadow: .5rem .5rem 2rem rgba(0,0,0,0.2);
        }
        .card .btn:active{
            transform: translateY(0);
        }
        .social-media{
            width: 100%;
            list-style: none;
            display: flex;
            justify-content: space-evenly;
            padding: 2rem 0;
            margin-top: 1.5rem;
            border-top: 1px solid rgba(0,0,0,0.1);
        }
        @media screen and (min-width:700px){
            .cardbox{
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }
            .card{
                margin: 2rem;
            }
    </style>
    <!-- //header -->
    <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- //about -->
        <div class="container py-md-5">
            <!---728x90--->
            <div class="row banner-grids mb-lg-5">
                <div class="col-lg-7 content-right">
                    <h3 class="title-w3pvt">About of Career Upgrade</h3>
                    <h4>The Begining Of New Start</h4>
                    <p class="mt-2 text-left">The main objective of the project is to design and develop Career Guidance, which is a place for Student and parents. Today, A Career Guidance System where students can see various career opportunities, the system shows various fields available after 10th, 12th, for graduation and also fields available after graduation. Career choice is the most important decision one can make.</p>
                    <p class="mt-2 text-left">We Hope This project would overcome the genuine problem of students in choice a better career opportunity.</p>
                    <div class="row stats text-left mt-5">
                        <div class="col-lg-4 counter">
                            <span class="fa fa-users"></span>
                            <div class="counter-info">
                                <h5>30.2 m+</h5>
                                <p>Student</p>

                            </div>
                        </div>
                        <div class="col-lg-4 counter two">
                            <span class="fa fa-user-md"></span>
                            <div class="counter-info">
                                <h5>27000+</h5>
                                <p>Courses</p>

                            </div>
                        </div>
                        <div class="col-lg-4 counter">
                            <span class="fa fa-diamond"></span>
                            <div class="counter-info">
                                <h5>813+</h5>
                                <p>Universities</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 content-left">
                    <img src="images/ab.jpg" alt="" class="img-fluid">
                </div>
                <div class="container py-md-5"> 
                        <section>
        <div class="container">
            <h1 class="heading">Meet the Team</h1>
            <div class="cardbox">
                <div class="card">
                    <img src="images/bg.jpg" alt="card background" class="card-img">
                    <img src="images/admin1.jpg" alt="profile image" class="profile-img">
                    <h1>Ashutosh</h1>
                    <p class="about">I am a Son, a Student ,a Researcher,a Web Developer, a blogger and little Bit programmer for now.</p>
                    <a href="contact.php" class="btn">Contact</a>
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li class="google"><a href="#"><span class="fa fa-google-plus"></span> Google</a></li>
                    </ul>
                </div>
                <div class="card">
                    <img src="images/bg.jpg" alt="card background" class="card-img">
                    <img src="images/admin2.jpg" alt="profile image" class="profile-img">
                    <h1>Abishake</h1>
                    <p class="about">I am a Son, a Student ,a Researcher,a Web Developer, a blogger and little Bit programmer for now.</p>
                    <a href="contact.php" class="btn">Contact</a>
                    <ul class="social_section_1info">
                        <li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                        <li class="google"><a href="#"><span class="fa fa-google-plus"></span> Google</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </section>
     </div>
    </div>
    </div>                
   <?php
   include("footer.php");
   ?>