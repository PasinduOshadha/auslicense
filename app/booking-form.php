<!DOCTYPE html>
<html lang="en">

<!-- header -->
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
        <div class="content">
            <!-- progress bar and the container -->
            <div class="progress-container">

                <div class="form-row p-5">
                    <div class="progress" style="height: 1px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress mt-4" style="height: 20px;">
                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                </div>
            </div>
            <!-- The booking form -->
            <div class="d-flex justify-content-center">
                <div class="bookig-form-container card card-shadow">
                    <form class="booking-form" action="#" method="post">
                        <div class="step_1" id="step_1">
                            <div class="d-flex justify-content-center card-title">
                                <p class="h3 text-uppercase">How can we help you?</p>
                            </div>
                            <div class="select-btn d-flex justify-content-center">
                                <label for="" class="select-label text-uppercase">
                                    <input type="checkbox" name="driving-lessons" id="driving-lessons">
                                    Driving lesson/s (1 & 2 hr)
                                </label>
                            </div>
                            <div class="select-btn d-flex justify-content-center">
                                <label for="" class="select-label text-uppercase">
                                    <input type="checkbox" name="driving-test" id="driving-test">
                                    Driving test package
                                </label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step1">
                                    Continue
                                </div>
                            </div>

                        </div>
                        <div class="step_2" id="step_2">
                            <div class="d-flex justify-content-center card-title">
                                <p class="h3 text-uppercase">Select your package</p>
                            </div>
                            <div class="amount_lesson card p-2 m-1">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="d-flex justify-content-end">
                                            <div class="row w-100">
                                                <div class="col-md-1">
                                                    <input class="w-100" type="number" id="points" name="points" step="1" value="1">
                                                </div>
                                                <div class="col-md-7">
                                                    <label for="">Number of hours</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="">$70/hour</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="">$70</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="amount_test card p-2 m-1">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="d-flex justify-content-end">
                                            <div class="row w-100">
                                                <div class="col-md-1">
                                                    <label for="">1</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <label for="">Driving Test Package</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label for="">$199</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-1 d-flex justify-content-center align-items-center">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </div>

                            </div>
                            <div class="total_amount card p-2 m-1">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="d-flex justify-content-end">
                                            <div class="row w-100">
                                                <div class="col-md-8"></div>
                                                <div class="col-md-2">
                                                    <p class="h4">Total</p>
                                                </div>
                                                <div class="col-md-2">
                                                    <p class="h4">$70</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <hr>

                            <div class="packages m-5">
                                <div class="d-flex justify-content-center">
                                    <div class="row">
                                        <p class="h4 text-uppercase">Add more to Save!</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card card-shadow m-1">
                                            <div class="align-self-center">
                                                <div class="discount">
                                                    <p class="text-uppercase">Save 5%</p>
                                                </div>
                                                <p class="h3">
                                                    $66.50
                                                    <small class="small-span">
                                                        /hr
                                                    </small>
                                                </p>
                                                <p class="h5">
                                                    $399 Total
                                                </p>
                                                <div class="btn btn-sm btn-primary text-uppercase">Add 5 lessons</div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-shadow m-1">
                                            <div class="align-self-center">
                                                <div class="discount">
                                                    <p class="text-uppercase">Save 5%</p>
                                                </div>
                                                <p class="h3">
                                                    $66.50
                                                    <small class="small-span">
                                                        /hr
                                                    </small>
                                                </p>
                                                <p class="h5">
                                                    $399 Total
                                                </p>
                                                <div class="btn btn-sm btn-primary text-uppercase">Add 5 lessons</div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="card card-shadow m-1">
                                            <div class="align-self-center">
                                                <div class="discount">
                                                    <p class="text-uppercase">Save 5%</p>
                                                </div>
                                                <p class="h3">
                                                    $66.50
                                                    <small class="small-span">
                                                        /hr
                                                    </small>
                                                </p>
                                                <p class="h5">
                                                    $399 Total
                                                </p>
                                                <div class="btn btn-sm btn-primary text-uppercase">Add 5 lessons</div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="d-flex justify-content-center">
                                <div class="m-2 btn btn-lg btn-secondary text-uppercase submit-btn" id="bk_btn_step2">
                                    Back
                                </div>
                                <div class="m-2 btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step2">
                                    Continue
                                </div>

                            </div>

                        </div>

                        <div class="step_3" id="step_3">
                            <div class="d-flex justify-content-center card-title">
                                <p class="h3 text-uppercase">Schedule (Optional)</p>
                            </div>
                            <div class="select-btn d-flex justify-content-center">
                                <label for="" class="select-label text-uppercase">
                                    <i class="fas fa-plus"></i> Driving lesson/s
                                </label>
                            </div>
                            <div class="select-btn d-flex justify-content-center">
                                <label for="" class="select-label text-uppercase">
                                    <i class="fas fa-plus"></i> Test Package
                                </label>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-center">
                                <div class="m-2 btn btn-lg btn-secondary text-uppercase submit-btn" id="bk_btn_step3">
                                    Back
                                </div>
                                <div class="m-2 btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step3">
                                    Continue
                                </div>

                            </div>


                        </div>

                    </form>


                </div>
                <!-- informations dialog box -->
                <div class="info">

                </div>
            </div>



        </div>


        <!-- footer -->
        <div class="footer">
            <!-- footer -->
            <?php include_once "./template_parts/footer.php"; ?>

        </div>
    </div>



</body>

</html>