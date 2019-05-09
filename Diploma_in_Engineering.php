
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Career,Career Upgrade" />
    <meta charset="UTF-8" />
    <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16"> 
    
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
    <style>
.title{
    font-family: sans-serif;
    color: deepskyblue;
    text-align: center;
}

.tabContainer{
    width: 100%;
    height:150%;
}
.tabContainer .buttonContainer{
    height: 15%;
}
.tabContainer .buttonContainer button{
    width: 25%;
    height: 100%;
    float: left;
    border: none;
    outline:none;
    cursor: pointer;
    padding: 10px;
    font-family: sans-serif;
    font-size: 18px;
    background-color: white;
}
.tabContainer .buttonContainer button:hover{
    background-color: #d7d4d4;
}
.tabContainer .tabPanel{
    height: 85%;
    background-color: gray;
    color: white;
    text-align: center;
    padding-top: 20px;
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 18px;
    display: inline-block;
    position: relative;
}
.apple{
    color: white;
    text-align: justify;
    padding: 12px;
}
 

    </style>
    <?php
     include("header.php");
    ?>
    <!-- //header -->
    
  
        <div class="container py-md-5">
            <h3 class="title-w3pvt text-center"><a name="rambo"><b>Career After 10</b></a></h3>
                   <br />
                        <div class="course-details-inner">
                            <h2 class="title-w3pvt text-center"><b>Diploma In Engineering</b></h2>
                            <br />
                            <div class="comment-top mt-5 row">
                            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                            <img class="img-fluid" src="images/eng.jpg" alt="">
                            </div>
                             <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                            <p>The Diploma in Engineering or Diploma in Technical Education is a program focused on practical and skills-oriented training. It is a technical course that only covers the essentials when ranked with an undergraduate engineering degree. It aims to provide students with industry or job related engineering knowledge, scientific skills, computing and analysis, mathematical techniques, a sound knowledge of English to communicate in the field and ability to apply problem solving techniques.</p>
                            <p>Its duration is 2–3 years. Many countries in the world recognize it as equivalent to pre-engineering or bridging course when considered for continuing studies in engineering related bachelors or associate degree programs. After successful completion of Diploma in Engineering course, students can either continue further Engineering studies in undergraduate level or get employment as technicians, technologists, supervisors, superintendents, foremen, machinist, workshop technicians, draftsman, station technicians (energy, thermal, aeronautical), automobile technicians, maintenance and service technicians, equipment mechanics and technicians, CAD/CAM programmer, agricultural overseers, instrument technicians, junior instructors, manufacturing, tool and die designers, electricians...etc.</p>
                            </div>
                            </div>
                        </div>
              
            
            <!---728x90--->
                    <div class="container py-md-5"> 
                        <?php
                        include("tabs\Engi.php");
                        ?>
                        <script >
                            var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
                            var tabPanels = document.querySelectorAll(".tabContainer  .tabPanel");

                            function showPanel(panelIndex, colorCode) {
                                tabButtons.forEach(function (node) {
                                    node.style.backgroundColor = "";
                                    node.style.color = "";
                                });
                                tabButtons[panelIndex].style.backgroundColor = colorCode;
                                tabButtons[panelIndex].style.color = "white";
                                tabPanels.forEach(function (node) {
                                    node.style.display = "none";
                                });
                                tabPanels[panelIndex].style.display = "block";
                                tabPanels[panelIndex].style.backgroundColor = colorCode;
                            }
                            showPanel(0, 'dodgerblue');
                        
                        </script>
            
                    </div>
        </div>

    <?php
        include("footer.php");
    ?>
    