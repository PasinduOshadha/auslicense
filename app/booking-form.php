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

        <!-- content of the page -->
        <div class="content">
            <!-- progress bar and the container -->
            <?php include_once "./template_parts/progress-bar.php"; ?>

            <!-- The booking form -->
            <div class="d-flex justify-content-center">
                <div class="bookig-form-container">
                    <!-- beginning of the form -->
                    <form class="booking-form" action="#" method="post">

                        <!-- step 1 of the form -->
                        <div class="step_1" id="step_1">
                            <div class="card card-shadow">
                                <div class="d-flex justify-content-center card-title">
                                    <p class="h3 text-uppercase">How can we help you?</p>
                                </div>

                                <!-- choose what to buy -->
                                <div class="select-btn d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="driving-lessons" name="driving-lessons">
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <label for="" class="select-label text-uppercase">
                                                Driving lesson/s (1 & 2 hr)
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="select-btn d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="driving-test" name="driving-test">

                                            </div>
                                        </div>
                                        <div class="col-md-10">

                                            <label for="" class="select-label text-uppercase">
                                                Driving test package
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- continue button -->
                                <div class="d-flex justify-content-center">
                                    <div class="btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step1">
                                        Continue
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- step 2 of the form -->
                        <div class="step_2" id="step_2">
                            <div class="card card-shadow">
                                <div class="d-flex justify-content-center card-title">
                                    <p class="h3 text-uppercase">Select your package</p>
                                </div>

                                <!-- lesson prices -->
                                <div class="amount_lesson card p-2 m-1">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="d-flex justify-content-end">
                                                <div class="row w-100">
                                                    <div class="col-md-2">
                                                        <input class="w-100" type="number" id="points" name="points" step="1" value="1">
                                                    </div>
                                                    <div class="col-md-6">
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

                                <!-- test package prices -->
                                <div class="amount_test card p-2 m-1">
                                    <div class="row">
                                        <div class="col-md-11">
                                            <div class="d-flex justify-content-end">
                                                <div class="row w-100">
                                                    <div class="col-md-2">
                                                        <label for="">1</label>
                                                    </div>
                                                    <div class="col-md-8">
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

                                <!-- total amount -->
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

                                <!-- packages to add more -->
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

                                <!-- continue and back buttons -->
                                <div class="d-flex justify-content-center">
                                    <div class="m-2 btn btn-lg btn-secondary text-uppercase submit-btn" id="bk_btn_step2">
                                        Back
                                    </div>
                                    <div class="m-2 btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step2">
                                        Continue
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- step 3 of the form -->
                        <div class="step_3" id="step_3">
                            <div class="card card-shadow">
                                <div class="d-flex justify-content-center card-title">
                                    <p class="h3 text-uppercase">Schedule (Optional)</p>
                                </div>
                                <div id="add-schedule">
                                    <div class="select-btn d-flex justify-content-center align-items-center btn" id="btn_add-driving-lessons">
                                        <i class="fas fa-plus"></i> <span class="text-uppercase m-1">Driving lesson/s</span>
                                    </div>
                                    <div class="select-btn d-flex justify-content-center align-items-center btn" id="btn_add-test-packages">
                                        <i class="fas fa-plus"></i> <span class="text-uppercase m-1">Test Package</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-center">
                                        <div class="m-2 btn btn-lg btn-secondary text-uppercase submit-btn" id="bk_btn_step3">
                                            Back
                                        </div>
                                        <div class="m-2 btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step3">
                                            Continue : Your Details
                                        </div>

                                    </div>
                                </div>

                                <!-- Driving lessons packages -->
                                <div id="schedule-details_lessons" class="card">
                                    <p class="card-header">Driving Lesson 1</p>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 text-style-2">
                                                Lesson Duration
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input class="form-check-input" type="radio" name="lesson-duration" id="" value="1 hour" checked>
                                                <label class="form-check-label" for="lesson-duration">
                                                    1 hour
                                                </label>
                                            </div>
                                            <div class="form-check col-md-3">
                                                <input class="form-check-input" type="radio" name="lesson-duration" id="" value="2 hours">
                                                <label class="form-check-label" for="lesson-duration">
                                                    2 hours
                                                </label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-6 text-style-2">
                                                    Available Dates
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Date input -->
                                                        <input class="form-control date" id="available-dates" name="available-dates" placeholder="dd/mm/yyyy" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 text-style-2">
                                                    Available times
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select..</option>
                                                        <option value="1"> 8:30 am - 9:30 am </option>
                                                        <option value="2"> 9:30 am - 10:30 am </option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="d-flex justify-content-center">
                                                <div class="m-2 btn btn-sm btn-secondary text-uppercase" id="cls-btn_schedule-details_lessons">
                                                    Cancel
                                                </div>
                                                <div class="m-2 btn btn-sm btn-primary text-uppercase" id="sv-btn_schedule-details_lessons">
                                                    Save
                                                </div>

                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- Test Packages -->
                                <div id="schedule-details_test" class="card">
                                    <p class="card-header">Driving Test Package</p>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 text-style-2">
                                                Driving test location
                                                <p class="text-style-3">
                                                    Only test locations that Guy services are displayed.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Select your test location..</option>
                                                    <option value="1">Welshpool Driving Assessment Centre - 21 Murray Rd South, Welshpool WA 6106</option>
                                                    <option value="2">Joondalup Driver and Vehicle Services Centre - 65 Boas Ave</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="row">
                                                <div class="col-md-6 text-style-2">
                                                    When is your test scheduled to start?
                                                    <p class="text-style-3">
                                                        Only Guy's available day’s & time’s are displayed
                                                    </p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <!-- Date input -->
                                                        <input class="form-control date" id="available-dates" name="available-dates" placeholder="dd/mm/yyyy" type="text" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select the test start time..</option>
                                                        <option value="1">12:30 pm</option>
                                                        <option value="2">12:45 pm</option>
                                                        <option value="3">1:00 pm</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="d-flex justify-content-center">
                                            <div class="m-2 btn btn-sm btn-secondary text-uppercase" id="cls-btn_schedule-details_test">
                                                Cancel
                                            </div>
                                            <div class="m-2 btn btn-sm btn-primary text-uppercase" id="sv-btn_schedule-details_test">
                                                Save
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- step 4 of the form -->
                        <div class="step_4" id="step_4">

                            <!-- seletcted package details -->
                            <div class="card card-shadow">
                                <div class="d-flex justify-content-center card-title mt-3">
                                    <p class="text-style-1">
                                        You have added 1 lesson and 1 test package to your cart
                                    </p>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <p class="text-style-1">
                                        You have made the following bookings with Guy:
                                    </p>
                                    <ul>
                                        <li class="text-style-3">
                                            <span class="text-style-2">1 hour lesson</span> 23 Sep 2021, 7:15 AM
                                        </li>
                                        <li class="text-style-3">
                                            <span class="text-style-2">Driving Test Package</span> 23 Sep 2021, 12:30 PM
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!-- registering for -->
                            <div class="card mt-5">
                                <div class="card-body">
                                    <p class="text-style-1">
                                        Who are you registering for?
                                    </p>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input class="form-check-input" type="radio" name="registerig-for" id="" value="Myself">
                                            <label class="form-check-label" for="registerig-for">
                                                Myself
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="col-md-12">
                                            <input class="form-check-input" type="radio" name="registerig-for" id="" value="other">
                                            <label class="form-check-label" for="registerig-for">
                                                Someone else (e.g. child/family/other)
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end of ---registering for--- -->

                            <div class="card mt-5">
                                <div class="card-body">
                                    <!-- pickup details -->
                                    <div class="book-for-me">
                                        <p class="text-style-1 d-flex justify-content-center">
                                            Please enter your pick up details
                                        </p>
                                    </div>
                                    <div class="book-for-someone">
                                        <p class="text-style-1 d-flex justify-content-center book-for-someone">
                                            Please enter the learner's pick up details
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="pickup-address"><span class="text-danger">*</span> Pick up address</label>
                                            <input type="text" class="form-control" id="pickup-address" placeholder="Enter a location">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="pickup-address"><span class="text-danger">*</span> Suburb</label>
                                                <input type="text" class="form-control" id="suburb" placeholder="Enter the suburb">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="state"><span class="text-danger">*</span> State</label>
                                                <select class="form-select" name="state">
                                                    <option selected>Please Select..</option>
                                                    <option value="1"> Australian Capital Territory </option>
                                                    <option value="2"> New South Wales </option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- personal details -->
                                    <div class="book-for-me">
                                        <p class="text-style-1 d-flex justify-content-center mt-5">
                                            Please provide your personal details
                                        </p>
                                    </div>
                                    <div class="book-for-someone">
                                        <p class="text-style-1 d-flex justify-content-center mt-5 book-for-someone">
                                            Please provide the learner's personal details
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first-name"><span class="text-danger">*</span> First Name</label>
                                                <input type="text" class="form-control" id="first-name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="last-name"><span class="text-danger">*</span> Last Name</label>
                                                <input type="text" class="form-control" id="last-name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email-add"><span class="text-danger">*</span> Email Address</label>
                                                <input type="email" class="form-control" id="email-add">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="phone-num"><span class="text-danger">*</span> Phone Number</label>
                                                <input type="tel" class="form-control" id="phone-num">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="email-add"><span class="text-danger">*</span> Date of Birth</label>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <select class="form-select" name="date">
                                                            <option selected>Date</option>
                                                            <?php
                                                            for ($i = 1; $i < 32; $i++) {
                                                                echo "<option value='" . $i . "'> " . $i . " </option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-select" name="month">
                                                            <option selected>Month</option>

                                                            <?php
                                                            $start = $month = strtotime('2009-01-01');
                                                            $end = strtotime('2009-12-22');
                                                            while ($month < $end) {
                                                                echo "<option value='" . date('F', $month) . "'> " . date('F', $month) . " </option>";
                                                                $month = strtotime("+1 month", $month);
                                                            }

                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-select" name="year">
                                                            <option selected>Year</option>
                                                            <?php
                                                            for ($i = 2021; $i > 1950; $i--) {
                                                                echo "<option value='" . $i . "'> " . $i . " </option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-6 d-flex align-items-end">
                                            <button type="button" class="btn btn-lg btn-outline-warning w-100">
                                                <a href="#" class="text-style-2">
                                                    I have a Referral Code
                                                </a>
                                            </button>

                                        </div>
                                    </div>

                                    <!-- in case if the booking is done by someone else -->
                                    <div class="book-for-someone">
                                        <p class="text-style-1 d-flex justify-content-center mt-5">
                                            Please provide your personal details
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="person-first-name"><span class="text-danger">*</span> First Name</label>
                                                    <input type="text" class="form-control" id="person-first-name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="person-last-name"><span class="text-danger">*</span> Last Name</label>
                                                    <input type="text" class="form-control" id="person-last-name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="person-email-add"><span class="text-danger">*</span> Email Address</label>
                                                    <input type="email" class="form-control" id="person-email-add">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="person-phone-num"><span class="text-danger">*</span> Phone Number</label>
                                                    <input type="tel" class="form-control" id="person-phone-num">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="relationship"><span class="text-danger">*</span> Relationship to learner</label>
                                                <select class="form-select" name="relationship" id="relationship">
                                                    <option selected>Please select</option>
                                                    <option value="Parent"> Parent </option>
                                                    <option value="Guardian"> Guardian </option>
                                                    <option value="Grandparent"> Grandparent </option>
                                                    <option value="Other"> Other </option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"></div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="other-relationship" placeholder="Enter Relationship">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end of ---in case if the booking is done by someone else--- -->

                                    <p class="text-style-1 d-flex justify-content-center mt-5">
                                        Choose a password for your learning dashboard
                                    </p>
                                    <p class="text-style-3 d-flex justify-content-center">
                                        Your dashboard allows you to make, manage & view bookings online 24/7.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password-entry1"><span class="text-danger">*</span> Password</label>
                                                <input type="password" class="form-control" id="password-entry1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="password-entry2"><span class="text-danger">*</span> Password Confirmation</label>
                                                <input type="password" class="form-control" id="password-entry2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="terms">
                                                I agree to ausLicense's <a href="#">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="m-2 btn btn-lg btn-primary text-uppercase submit-btn" id="nxt_btn_step4">
                                            Continue
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- step 5 of the form -->
                        <div class="step-5" id="step-5">
                            <div class="card">
                                <div class="card-title">
                                    <h3>Payment Details</h3>
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
        <!-- end of content -->


        <!-- footer -->
        <div class="footer">
            <!-- footer -->
            <?php include_once "./template_parts/footer.php"; ?>

        </div>
    </div>



</body>

</html>