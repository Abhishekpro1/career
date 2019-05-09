 <?php
     include("header.php");
    ?>
    <!-- //header -->
    <div class="main-content inner">
        <div class="overlay inner">

        </div>
    </div>
    <!--// banner -->
    <!-- banner-bottom -->
    <section class="contact-main py-5">
        <div class="container py-md-5">
            <!---728x90--->

            <h3 class="title-w3pvt text-center">Contact Us</h3>
            <!---728x90--->

            <div class="comment-top mt-5 row">
                <div class="col-lg-5 comment-bottom w3pvt_mail_grid-img">
                    <img class="img-fluid" src="images/traveler.jpg" alt="">
                </div>
                <div class="col-lg-7 comment-bottom w3pvt_mail_grid_right">
                    
            <form  method="POST" action="server.php">
            <div class="row">
                <div class="col-lg-6 form-group">
                    <label>First Name</label>
                    <input type="text" aria-required="true" size="30" value="" name="name" id="first-name" class="form-control" placeholder="First name" required>
                </div>
                <div class="col-lg-6 form-group">
                    <label>Last Name</label>
                    <input type="text" aria-required="true" size="30" value="" name="last_name" id="last_name" class="form-control" placeholder="Last name" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 form-group">
                    <label>Email</label>
                    <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Your email adress" required>
                </div>
                <div class="col-lg-6 form-group">
                    <label>Phone Number</label>
                    <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone number" required>
                </div>
                </div>
                    <div class="form-group">
                        <label>Write Message</label>
                             <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" id="submit" name="submit" class="read-more btn submit mt-3">Contact Us</button>
                    </form>
                    </div>

                </div>

                <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3">
                    <li class="col-lg-4 adress-info">
                        <div class="row">
                            <div class="col-md-3 text-lg-center adress-icon">
                                <span class="fa fa-map-marker"></span>
                            </div>
                            <div class="col-md-9 text-left">
                                <h6>Location</h6>
                                <p>GNDU, Ladowali Rd, Near Government B.Ed. College, 
                                    <br>Jalandhar, Punjab 144001</p>
                            </div>
                        </div>
                    </li>

                    <li class="col-lg-4 adress-info">
                        <div class="row">
                            <div class="col-md-3 text-lg-center adress-icon">
                                <span class="fa fa-envelope-open-o"></span>
                            </div>
                            <div class="col-md-9 text-left">
                                <h6>Email</h6>
                                <a href="mailto:info@example.com">career@gmail.com</a>
                                <br>
                                <a href="mailto:info@example.com">career@gmail.com</a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-4 adress-info">
                        <div class="row">
                            <div class="col-md-3 text-lg-center adress-icon">
                                <span class="fa fa-mobile"></span>
                            </div>
                            <div class="col-md-9 text-left">
                                <h6>Phone Number</h6>
                                <p>+ 1234567890</p>
                                <p>+ 0987654321</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="map-fo mt-lg-5 mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13633.086082960623!2d75.5886359!3d31.3238737!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5d2574fbe41e548!2sGuru+Nanak+Dev+University+College!5e0!3m2!1sen!2sin!4v1553350290675" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
        </section>
    <!-- //banner-bottom -->
    <!---728x90--->

    <!--/help-line -->
    <section class="help-line-w3layouts py-5">
        <div class="container">
            <div class="row help-line-grid">
                <div class="col-sm-6">
                    <h3>Contact Us</h3>
                    <p>Call us, we are 24/7 Helpline</p>
                </div>
                <div class="col-sm-6 text-sm-right mt-sm-0 mt-3">
                    <h3><span class="fa fa-phone" aria-hidden="true"></span> +11 2345 6789</h3>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>

