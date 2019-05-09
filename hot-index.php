 <style>

@import url('https://fonts.googleapis.com/css?family=Open+Sans:400,700');

.wrapper {
	height: 100vh;
	display: flex;
	align-items: center;
	color: #FFF;
	margin: auto;
	text-align: center;
    font-family: 'Open Sans', sans-serif;
}
.video-wrap {
	position: absolute;
	top: 30%;
	left: 0;
	height: 80%;
	width: 100%;
	overflow: hidden;
}
.video-wrap video {
	min-width: 100%;
	min-height: 100%;
}
.lay {
	z-index: 1;
	height: 80%;
	width: 100%;
	top: 30%;
	left: 0;
	background: #1F6A9A;
	position: absolute;
	opacity: .8;
}
.landing-text {
	z-index: 2;
}
.hot {
    margin-top: 5%;
	font-weight: 700;
	font-size: 380%;
}
.cold {
	font-size: 150%;
	font-weight: 400;
	margin-top: 0%;
	padding-bottom: 3%;
    color: white;
}
.new-btn {
	text-decoration: none;
	color: #FFF;
	font-size: 150%;
	background: dodgerblue;
	padding: 1% 3%;
	border-radius: 5px;
}
.new-btn:hover {
	background: dodgerblue;
}

#slider {
	overflow: hidden;
}
#slider figure {
	position: relative;
	width: 500%;
	margin: 0;
	left: 0;
	animation: 15s slider infinite;
}
#slider figure img {
	width: 20%;
    height: 60%;
	float: left;
}

@keyframes slider {
	0% {
		left: 0;
	}
	20% {
		left: 0;
	}
	25% {
		left: -100%;
	}
	45% {
		left: -100%;
	}
	50% {
		left: -200%;
	}
	70% {
		left: -200%;
	}
	75% {
		left: -300%;
	}
	95% {
		left: -300%;
	}
	100% {
		left: -400%;
	}
}
#cooltext{
    text-align: justify;
}
</style>

  <link rel="stylesheet" href="css/addon.css">

    <?php
     include("header.php");
    ?>
    
    <!-- //header -->
    <div class="wrapper" id="home" style="margin-bottom: 0%;">
        <div class="video-wrap">
  		<video src="images/mac.mp4" playsinline autoplay muted loop></video>
  	    </div>
  	    <div class="lay"></div>
        <div class="landing-text">
            <h1 class="hot">The Start of New Begining</h1>
           <p class="cold">Career guidance is the guidance given to individuals to help them acquire the knowledge, information, skills, and experience necessary to identify career options, and narrow them down to make one career decision.</p>
            <a href="categories.php" class="new-btn">Explore Our Conselling Program</a><br />
            <br />
            <br />
            <a href="e-books.html" class="new-btn">Explore Our E-Books</a>

        </div>
    </div>
        <div class="container py-md-5" >
            <div class="row banner-grids mb-lg-5">
                <div class="col-lg-7 content-right">
                    <h3 class="title-w3pvt">Career Upgrade</h3>
                    <h4>We will help to find career, to everyone.</h4>
                    <p class="mt-2 text-left" >For people who find it difficult to realize the right career meant for them; a career guide helps them sort this confusion. There are infinite career options available to choose from, and without an expert’s proper guidance, one might stick to a few that his/her friends or relatives ask him to pursue. An informed career guide makes one aware about the scope of every career option in detail, which widens the horizon for the student. For people who think they are clear on their career paths and have attained enough clarity to work towards a chosen career option, career guides ensure that they achieve their goals without any distractions. </p>
                    <p class="mt-2 text-left">Career Upgrade's Career Planner, through its scientific and meticulously designed psychometric career assessment, will help you choose a career that suits your potential and area of interest. </p>
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
                <div class="col-lg-5 content-left" id="slider">
                    <figure>
                        <img src="images/desk4.jpg">
                        <img src="images/desk5.jpg">
                        <img src="images/desk6.jpg">
                        <img src="images/desk7.jpg">
                        <img src="images/desk4.jpg">
		            </figure>
                </div>
            </div>
                
            <div class="container py-md-5">
            <!---728x90--->
            <h3 class="title-w3pvt text-center"><a name="rambo">Career which you want?</a></h3>
            <!---728x90--->

            <div class="row ab-info second mt-lg-4 text-center">
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="w3layouts-icon mx-auto">
                            <span class="fa fa-object-ungroup" aria-hidden="true"></span>
                        </div>
                        <div class="ab-info-con">
                            <h4>Higher Studies</h4>
                            <p>To get a strong foundation for higher studies like graduation, a good option after 10th is studying Pre-University Course (PUC). The selection of streams depends on keen interest in the subject.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="w3layouts-icon mx-auto">
                            <span class="fa fa-xing" aria-hidden="true"></span>
                        </div>
                        <div class="ab-info-con">
                            <h4>Private Sector</h4>
                            <p>Work Under Someone to improve your skills or start your own small work after learning some Soft Skills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <div class="ab-content-inner">
                        <div class="w3layouts-icon mx-auto">
                            <span class="fa fa-handshake-o" aria-hidden="true"></span>
                        </div>
                        <div class="ab-info-con">
                            <h4>Government Sector</h4>
                            <p>Gain Some Skills under Government Wallfare Schemes and improve your skills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ab-content">
                    <a href="10th.php" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                </div>
                <div class="col-lg-4 ab-content">
                     <a href="placement.php" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                </div>
                <div class="col-lg-4 ab-content">
                    <a href="govtjobs.php" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                </div>
            </div>

            </div>
                <div class="row banner-grids mb-lg-5">
                     <div class="col-lg-5 content-left" id="slider">
                         <br>
                         <br>
                    <figure>
                        <img src="images/desk.jpg">
                        <img src="images/desk2.png">
                        <img src="images/desk3.jpeg">
                        <img src="images/desk9.jpg">
                        <img src="images/desk.jpg">
		            </figure>
                       </div>
                <div class="col-lg-7 content-right">
                    <br>
                    <br>
                    <h3 class="title-w3pvt">Need for Career Planning:</h3>
                    <h4>Career Planning is necessary due to the following reasons:</h4>
                    <p class="mt-2 text-left">
                    1. To attract competent persons and to retain them in the organization.<br>
                    2. To provide suitable promotional opportunities.<br>
                    3. To enable the employees to develop and take them ready to meet the future challenges.<br>
                    4. To increase the utilization of managerial reserves within an organization.<br>
                    5. To correct employee placement.<br>
                    6. To reduce employee dissatisfaction and turnover.<br>
                    7. To improve motivation and morale.<br>
                    </p>
                    <p class="mt-2 text-left" id="cooltext">Career Upgrade's Career Planner, through its scientific and meticulously designed psychometric career assessment, will help you choose a career that suits your potential and area of interest. </p>
                    
                </div>
               
            </div>
            <br>
            <br>
                <h3 class="title-w3pvt text-center mb-5">Latest News</h3>
                <div class="row team-grids text-left mt-md-5 mt-4">
                    <div class="col-lg-4 team-main p-0">
                        <div class="team-img "id="slider">
                        <figure>
                        <img src="images/news.png">
                        <img src="images/news1.png">
                        <img src="images/news.png">
                        <img src="images/news2.png">
                        <img src="images/news.png">
		                </figure> </div>
                        <div class="team-info">
                            <h4><a href="single.php">Hiring Spree: Unicorns</a></h4>
                            <small>May 08.2019</small>
                            <p id="cooltext">Unicorns in the startup ecosystem are not just attracting funds but also recruiting high-cost talent from diverse sectors to helm critical functions, with Oyo, Zomato and Swiggy leading the table for top hires. Over a dozen prized startups — the valuations of which crossed $1 billion recently — have added more than 350 director and CXO level hires over the last two years, according to research by specialist staffing company Xpheno.</p>
                            <a href="single.php" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                    </div>

                    <div class="col-lg-4 team-main p-0">
                        <div class="team-info">
                            <h4>
                                <a href="single.php">Prepare Yourself To Get Good Appraisal</a>
                            </h4>
                            <small>May 08.2019</small>
                            <p id="cooltext">No one enjoys the annual performance review process. You dislike being judged for past events or having your increments and promotion linked to a single appraisal.Your manager abhors having to critique people, impacting emotions or dividing a limited budget for increments and a few promotion slots amongst competing colleagues. You can make this process smoother and achieve the best outcome for you, your boss and your Employer.</p>
                            <a href="single.php" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                        <div class="team-img" id="slider">
                        <figure>
                        <img src="images/news3.png">
                        <img src="images/news4.png">
                        <img src="images/news9.jpg">
                        <img src="images/news5.png">
                        <img src="images/news3.png">
		                </figure> </div>
                    </div>
                    <div class="col-lg-4 team-main p-0">
                        <div class="team-img" id="slider">
                        <figure>
                        <img src="images/news6.png">
                        <img src="images/news7.png">
                        <img src="images/news10.jpg">
                        <img src="images/news8.png">
                        <img src="images/news6.png">
		                </figure> </div>
                        <div class="team-info">
                            <h4> <a href="single.php">Retrieve Your Money From a Co-Worker</a></h4>
                            <small>May 08.2019</small>
                            <p>If you have already loaned the money and have not got it back, one possibility is that the borrower has simply forgotten about it. In such a case, a gentle reminder will serve the purpose.</p>
                            <a href="single.php" class="read-more two btn m-0 px-3"><span class="fa fa-long-arrow-right"> </span></a>
                        </div>
                    </div>
                </div><br>
                <section class="testimonials py-5" id="testimonials">
                    <div class="container py-md-5">
                        <div class="header text-center">
                            <h3 class="title-w3pvt two mb-lg-5 mb-4"> Student Reviews<span>.</span></h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 test-info text-left">
                                <p><span class="fa fa-quote-left"></span> Many friends and websites advised not taking up consultancy services. But I really feel that Career Upgrade did a great job and helped me get into my dream university. <span class="fa fa-quote-right"></span></p>
                                <div class="test-img text-right mb-3">
                                    <img src="images/te2.jpg" class="img-fluid" alt="user-image">
                                </div>
                                <h3 class="my-md-2 my-3 text-right">Aman</h3>
                            </div>
                            <div class="col-lg-4 test-info text-left">
                                <p><span class="fa fa-quote-left"></span> Very nice Website. I would like to suggest every students to visit this website. This is single platform of learning and helps us a lot grooming our career. Thanks you  <span class="fa fa-quote-right"></span></p>

                                <div class="test-img text-right mb-3">
                                    <img src="images/te3.jpg" class="img-fluid" alt="user-image">
                                </div>
                                <h3 class="my-md-2 my-3 text-right"> Abhinav</h3>
                            </div>
                            <div class="col-lg-4 test-info text-left">
                                <p><span class="fa fa-quote-left"></span> A great platform , for a great initiative. The Faculty out there are gems actually.Evrything about them, evry concpt is crisp n clear.Love Venturing its courses.Must try on for all segment of student of all spheres of education field. <span class="fa fa-quote-right"></span></p>

                                <div class="test-img text-right mb-3">
                                    <img src="images/te1.jpg" class="img-fluid" alt="user-image">
                                </div>
                                <h3 class="my-md-2 my-3 text-right">Jenifer Burns</h3>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
       
    
    <!--//testimonials -->
    <!---728x90--->

    <!-- footer -->
    <?php
            include("footer.php")
        ?>
    <!-- //footer -->
</body>


</html>
