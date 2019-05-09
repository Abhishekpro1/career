
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
                            <h2 class="title-w3pvt text-center"><b>IT And Computer Technology</b></h2>
                            <br />
                            <div class="comment-top mt-5 row">
                            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                            <img class="img-fluid" src="images/It.jpg" alt="">
                            </div>
                             <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                            <p>The Computer Technology Computer and Graphics Technology program is designed primarily for students seeking employment with organizations that use computers to process, design, manage, and communicate information.</p>
                            <p>The program prepares individuals to provide technical assistance, support, and advice to computer users to help troubleshoot software and hardware problems.</p>
                            <p>Includes instruction in computer concepts, information systems, networking, operating systems, computer hardware, the Internet, software applications, help desk concepts and problem solving, and principles of customer service</p>
                            </div>
                            </div>
                        </div>
              
            
            <!---728x90--->
                    <div class="container py-md-5"> 
                        <?php
                        include("tabs\It.php");
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
    