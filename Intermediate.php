
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
                            <h2 class="title-w3pvt text-center"><b>Intermediate</b></h2>
                            <br />
                            <div class="comment-top mt-5 row">
                            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                            <img class="img-fluid" src="images/career-dev.jpg" alt="">
                            </div>
                             <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                            <p>The pre-university course or pre-degree course, popularly abbreviated to PUC or PDC, is an intermediate course (which is known as 10+2) of two years' duration, conducted by state education institutions or boards in India. This pre-university course is also known as the Plus-two or Intermediate course. A person desiring admission to an Indian university must pass this course, which can be considered as a degree bridge course to prepare students for university education.</p><p>Admission to this course is based on marks obtained for the Secondary School Leaving Certificate, awarded after successful completion of five years of primary school, followed by five years of secondary school. The Indian education system follows a 10+2+3 (4 or 5) pattern, so that a bachelor's degree requires a minimum of 10 years of school, plus two years of PUC, plus either three, four or five years at university. Colleges offering a pre-university course are known as PU Colleges or Junior colleges in India.</p>
                            </div>
                            </div>
                        </div>
              
            
            <!---728x90--->
                    <div class="container py-md-5"> 
                        <?php
                        include("tabs\Inter.php");
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
    