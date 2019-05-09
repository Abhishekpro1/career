
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
                            <h2 class="title-w3pvt text-center"><b>Travel And Tourism</b></h2>
                            <br />
                            <div class="comment-top mt-5 row">
                            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                            <img class="img-fluid" src="images/travel-and-tourism.jpg" alt="">
                            </div>
                             <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                            <p>The travel and tourism industry, along with the related sectors contributing to it, is expected to grow in leaps and bounds in the coming years. A job in this industry can be highly exciting and adventurous and even pays well. In India, the travel industry hopes to create 46 million job opportunities by 2025. Though it was slow to take off in this country, the government's initiatives in this field are uncovering a bright future for those who want to make a career in this field.</p><p>India's potential in the field of travel and tourism is hardly close to being fulfilled. The country is a geographical anomaly, having almost all the geographical features available. According to a report published by the World Travel and Tourism Council (WTTC), India could possibly add another Rs. 8, 50,000 crores by the year 2020-just through tourism! WTTC calculated that tourism generated 8.31 lakh crore or 6.3 per cent of the nation's GDP in 2015 and supported 37.315 million jobs, which is about 8.7 per cent of its total employment.</p>
                            </div>
                            </div>
                        </div>
              
            
            <!---728x90--->
                    <div class="container py-md-5"> 
                        <?php
                        include("tabs\Tra.php");
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
    