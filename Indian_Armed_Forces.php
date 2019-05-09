
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
                            <h2 class="title-w3pvt text-center"><b>Indian Armed Forces</b></h2>
                            <br />
                            <div class="comment-top mt-5 row">
                            <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                            <img class="img-fluid" src="images/army.png" alt="">
                            </div>
                             <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                            <p>The Indian Armed Forces are the military forces of the Republic of India. It consists of three[12][13] professional uniformed services: the Indian Army, Indian Navy, and Indian Air Force. Additionally, the Indian Armed Forces are supported by the Indian Coast Guard and paramilitary organisations[14] (Assam Rifles, and Special Frontier Force) and various inter-service commands and institutions such as the Strategic Forces Command, the Andaman and Nicobar Command and the Integrated Defence Staff. The President of India is the Supreme Commander of the Indian Armed Forces. The Indian Armed Forces are under the management of the Ministry of Defence (MoD) of the Government of India. With strength of over 1.4 million active personnel,[15][16] it is the world's 2nd largest military force and has the world's largest volunteer army.</p>
                            </div>
                            </div>
                        </div>
              
            
            <!---728x90--->
                    <div class="container py-md-5"> 
                        <?php
                        include("tabs\army.php");
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
        include("Master/footer.php");
    ?>
    