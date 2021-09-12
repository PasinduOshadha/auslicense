<!DOCTYPE html>
<html lang="en">
<?php include_once "./template_parts/header.php"; ?>

<body>
    <!-- main container -->
    <div class="container">

        <!-- header -->
        <div class="header">

            <!-- logo -->
            <div class="logo-container d-flex justify-content-center">
                <img src="../assets/images/logo.png" alt="logo" class="web-logo">
            </div>

        </div>

        <!-- content of the page -->
        <div class="content">

            <!-- search bar -->
            <div class="row">

                <!-- select transmission type -->
                <div class="col-md-3">
                    <div class="btn-group w-100">
                        <input type="radio" class="btn-check" name="transmission-mode" id="Auto" checked />
                        <label class="btn btn-secondary w-50 rounded-left" for="Auto">Auto</label>

                        <input type="radio" class="btn-check" name="transmission-mode" id="Manual" />
                        <label class="btn btn-secondary w-50 rounded-right" for="Manual">Manual</label>
                    </div>

                </div>

                <!-- search bar textbox -->
                <div class="col-md-7">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                </div>

                <!-- search button -->
                <div class="col-md-2">
                    <button class="btn btn-primary w-100" type="submit">Search</button>

                </div>
            </div>

            <!-- search results -->
            <div class="search-results mt-5 d-flex">

                <!-- search result 1 -->
                <div class="card w-50 m-2">
                    <div class="row">

                        <!-- profile image -->
                        <div class="col-md-4 d-flex align-items-center">
                            <span class="circle d-flex align-items-end">
                                <div class="search-profile d-flex justify-content-center">
                                    <img class="image" src="../assets/images/profile-1.png" alt="profile">
                                </div>
                            </span>
                        </div>

                        <!-- profile details -->
                        <div class="col-md-8">

                            <!-- name & details -->
                            <div class="row">
                                <h3>Michael</h3>
                                <p class="text-style-2 font-italic">Michael speaks English.</p>
                                <div class="d-flex align-items-center">

                                    <!-- availability modal -->
                                    <a class="availability-link" href="#" data-toggle="modal" data-target=".availability-details"> 
                                        <i class="fas fa-calendar-week"></i> 
                                        Check Availability 
                                        <i class="fas fa-chevron-right"></i>
                                    </a>

                                    
                                </div>
                            </div>

                            <!-- profile buttons -->
                            <div class="row">

                                <!-- view profile button -->
                                <div class="col-md-6">
                                    <a href="#" type="button" class="btn-text-1 btn btn-secondary text-uppercase w-100">View Profile</a>

                                </div>

                                <!-- book online button -->
                                <div class="col-md-6">
                                    <a href="booking-form.php" type="button" class="btn-text-1 btn btn-primary text-uppercase w-100">Book Online Now</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- search result 2 -->
                <div class="card w-50 m-2">
                    <div class="row">

                        <!-- profile image -->
                        <div class="col-md-4 d-flex align-items-center">
                            <span class="circle d-flex align-items-end">
                                <div class="search-profile d-flex justify-content-center">
                                    <img class="image" src="../assets/images/profile-1.png" alt="profile">
                                </div>
                            </span>
                        </div>

                        <!-- profile details -->
                        <div class="col-md-8">

                            <!-- name & details -->
                            <div class="row">
                                <h3>Michael</h3>
                                <p class="text-style-2 font-italic">Michael speaks English.</p>
                                <div class="d-flex align-items-center">
                                    <!-- availability modal -->
                                    <a class="availability-link" href="#" data-toggle="modal" data-target=".availability-details"> 
                                        <i class="fas fa-calendar-week"></i> 
                                        Check Availability 
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- profile buttons -->
                            <div class="row">

                                <!-- view profile button -->
                                <div class="col-md-6">
                                    <a href="#" type="button" class="btn-text-1 btn btn-secondary text-uppercase w-100">View Profile</a>

                                </div>

                                <!-- book online button -->
                                <div class="col-md-6">
                                    <a href="booking-form.php" type="button" class="btn-text-1 btn btn-primary text-uppercase w-100">Book Online Now</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- modal -->
            <div class="modal fade availability-details" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <i class="fas fa-info-circle fa-2x"></i>
                            <h5 class="modal-title col-md-7" id="exampleModalCenterTitle">To begin the booking process please select "Book with Michael"</h5>
                            <div class="row">
                                <div class="row align-items-center">
                                    <span class="available-mark border border-dark bg-secondary m-1"> </span> 
                                    Closed/ Booked out

                                </div>
                                <div class="row  align-items-center">
                                    <span class="available-mark border border-dark m-1"> </span> 
                                    Available

                                </div>
                            </div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <a href="booking-form.php" type="button" class="btn btn-primary text-uppercase">
                                Book with Michael
                                <i class="fas fa-chevron-right"></i>
                            </a>


                        </div>
                    </div>
                </div>
            </div>
            <!-- end of ---modal--- -->









        </div>
        <!-- end of content -->
    </div>




    <!-- footer -->
    <div class="footer">
        <!-- footer -->
        <?php include_once "./template_parts/footer.php"; ?>
    </div>
</body>

</html>