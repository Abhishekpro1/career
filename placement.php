<?php
session_start();
@$user_id =$_SESSION['user_id'];
@$email = $_SESSION['email'];
if($email == "")
{
	header("location:login.php");
}

?>
<link rel="stylesheet" href="css/style_placement.css" />
<?php 
    include("header.php");
?>

<?php include("config.php");

if(isset($_POST['apply']))
{
    $user_id = $_POST['user_id'];
    $apply_id = $_POST['user_id'];
    $query = mysqli_query($con,"INSERT into apply (user_id,apply_id)values('$user_id','$apply_id') ");
    if($query)
    {  
         echo"submit";
       
    }
}
?>
   

           <div class="section hero-section transparent" style="background-image: url('images/background04.jpg');">
            <div class="inner">
                <div class="container">
                
                        
                    <div class="job-search-form" style="color:white;padding-bottom: 190px">
                        <h2 style="font-size:100px; " class="self-center"><span>Over </span><span> 10,000<sup>+</sup></span><span> Placements</span>
                        </h2>
                        <h2 >Find Better jobs Faster with 1 click apply to multiple jobs in there.Our database holdsover 7000 jobs and browse over your interest.</h2>

                    </div> <!-- end .job-search-form -->    
                 <!-- end .container -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->
         <div class="section featured-jobs-section">
            <div class="inner">
                <div class="container">
                    <div class="section-top-content flex items-center">
                        <h1>Featured Jobs</h1>
<!--                        <a href="#0">View all jobs<i class="ion-ios-arrow-thin-right"></i></a>-->
                    </div> <!-- end .section-top-content -->
                    <div class="jobs-table">
                        <div class="table-header">
                            <div class="table-cells flex">
                                <div class="job-title-cell"><h6>Job title / Company name</h6></div>
                                <div class="job-type-cell"><h6>Type</h6></div>
                                <div class="location-cell"><h6>Location</h6></div>
                                <div class="expired-date-cell"><h6>Degree</h6></div>
                                <div class="salary-cell"><h6>Salary</h6></div> 
                                <div class="status-cell"><h6>Status</h6></div>                  
                            </div> <!-- end .table-cells -->
                        </div> <!-- end .table-header -->
                         <?php
                              $query = mysqli_query($con,  "SELECT * FROM jobs_form");
                              while($row = mysqli_fetch_array($query))
                              {
                        ?>

                        <form method="POST">
                        <div class="table-row">
                            <div class="table-cells flex no-wrap">
                                <div class="cell job-title-cell flex no-column no-wrap">
                                    <img src="images/company_logo/company-logo01.jpg" alt="company-logo" class="img-responsive">
                                    <div class="content">
                                        <h4><a href="job_details.php"><?php echo $row["title"] ?></a></h4>
                                        <p class="small"><?php echo $row["company"] ?></p>
                                    </div> <!-- end .content -->
                                </div> <!-- end .job-title-cell -->
                                <div class="cell job-type-cell flex no-column">
                                    <div class="cell-mobile-label">
                                        <h6>Type</h6>
                                    </div> <!-- end .cell-label -->                                 
                                    <button type="button" class="button full-time"><?php echo $row["timing"] ?></button>
                                </div> <!-- end .job-type-cell -->
                                <div class="cell location-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Location</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><?php echo $row["location"] ?></p>
                                </div> <!-- end .location-cell -->
                                <div class="cell expired-date-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Expired Date</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><?php echo $row["degree"] ?></p>
                                </div> <!-- end .expire-date-cell -->
                                <div class="cell salary-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Salary</h6>
                                    </div> <!-- end .cell-label -->
                                    <p><sup></sup><?php echo $row["salary"] ?></p>
                                </div> <!-- end .salray-cell -->
                                <div class="cell salary-cell flex no-column no-wrap">
                                    <div class="cell-mobile-label">
                                        <h6>Action</h6>
                                        <input type="hidden" name="user_id" value="<?php echo $row['job_id']; ?>">
                                    </div> <!-- end .cell-label -->


                                    <button type="submit" name="apply"> Apply</button>
                                </div>
                            </div> <!-- end .table-cells -->
                        </div> <!-- end .table-row -->
                        </form>
                         
                        <?php
                                }
                          ?>
                       
                        <!-- end .table-row -->
                        <div class="table-footer flex space-between items-center">
                            <h6>Showing<span>1-5</span>of 23 jobs</h6>
                            <div class="jobpress-custom-pager list-unstyled flex space-between no-column items-center">
                                <a href="#0" class="button"><i class="ion-ios-arrow-left"></i>Prev</a>
                                <ul class="list-unstyled flex no-column ">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>                                 
                                </ul>
                                <a href="#0" class="button">Next<i class="ion-ios-arrow-right"></i></a>
                            </div> <!-- end .jobpress-custom-pager -->
                        </div>
                    </div> <!-- end .jobs-table -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->
        <!-- Clients Section -->
        <div class="section clients-section solid-grey-bg">
            <div class="inner">
                <div class="container">
                    <h1 class="section-title">Clients & Partners</h1>
                    <div class="logo-grid">
                        <div class="logo-grid-row flex space-between">
                            <div class="logo-item flex">
                                <img src="images/client-logo01.png" alt="client-company-logo" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->
                            <div class="logo-item flex">
                                <img src="images/client-logo02.png" alt="client-company-logo" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->
                            <div class="logo-item flex">
                                <img src="images/client-logo03.png" alt="client-company-logo" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->                          
                            <div class="logo-item flex">
                                <img src="images/client-logo04.png" alt="client-company-logo" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->
                            <div class="logo-item flex">
                                <img src="images/client-logo05.png" alt="client-company-logo" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->                          
                            <div class="logo-item flex">
                                <img src="images/client-logo06.png" alt="client-company-logo" class="img-responsive self-center">
                            </div> <!-- end .logo-item -->
                        </div> <!-- end .logo-grid-row -->
                    </div> <!-- end .logo-grid -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->
    <!-- footer -->
<?php
    include("footer.php");
?>
