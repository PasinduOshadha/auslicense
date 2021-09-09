$(document).ready(function () {
    // next buttons
    $("#nxt_btn_step1").click(function (e) {
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").show();
        $("#step_3").hide();
        $("#step_4").hide();
        $("#step-5").hide();
    });

    $("#nxt_btn_step2").click(function (e) {
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").hide();
        $("#step_3").show();
        $("#step_4").hide();
        $("#step-5").hide();


        var progress_bar = document.getElementById("progress-bar");
        progress_bar.style.width = 39 + '%';
    });

    $("#nxt_btn_step3").click(function (e) {
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").hide();
        $("#step_3").hide();
        $("#step_4").show();
        $("#step-5").hide();


        var progress_bar = document.getElementById("progress-bar");
        progress_bar.style.width = 61 + '%';
    });

    $("#nxt_btn_step4").click(function (e) {
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").hide();
        $("#step_3").hide();
        $("#step_4").hide();
        $("#step-5").show();


        var progress_bar = document.getElementById("progress-bar");
        progress_bar.style.width = 83 + '%';
    });

    // back buttons
    $("#bk_btn_step2").click(function (e) {
        e.preventDefault();
        $("#step_1").show();
        $("#step_2").hide();
        $("#step_3").hide();

        var progress_bar = document.getElementById("progress-bar");
        progress_bar.style.width = 17 + '%';

        
    });
    $("#bk_btn_step3").click(function (e) {
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").show();
        $("#step_3").hide();

        var progress_bar = document.getElementById("progress-bar");
        progress_bar.style.width = 17 + '%';

    });

    $("#btn_add-driving-lessons").click(function (e) {
        e.preventDefault();
        $("#add-schedule").hide();
        $("#schedule-details_test").hide();
        $("#schedule-details_lessons").show();

    });
    $("#btn_add-test-packages").click(function (e) {
        e.preventDefault();
        $("#add-schedule").hide();
        $("#schedule-details_lessons").hide();
        $("#schedule-details_test").show();

    });
    $("#cls-btn_schedule-details_test").click(function (e) {
        e.preventDefault();
        $("#add-schedule").show();
        $("#schedule-details_lessons").hide();
        $("#schedule-details_test").hide();

    });
    $("#cls-btn_schedule-details_lessons").click(function (e) {
        e.preventDefault();
        $("#add-schedule").show();
        $("#schedule-details_lessons").hide();
        $("#schedule-details_test").hide();

    });

    // radio button change
    $("input[type=radio][name=registerig-for]").change(function (e) {
        e.preventDefault();
        if ($(this).val() == "other") {
            $(".book-for-someone").show();
            $(".book-for-me").hide();
            //   $("#groomGuardianIndex").hide();
        } else {
            $(".book-for-someone").hide();
            $(".book-for-me").show();
            //   $("#groomGuardianIndex").show();
        }
    });

    //   dropdown change
    $("#relationship").change(function (e) {
        e.preventDefault();
        if ($(this).val() == "Other") {
            $("#other-relationship").show();
        } else {
            $("#other-relationship").hide();
        }
    });

    // modal button
    $("#modal-button").click(function (e) { 
        e.preventDefault();
        $(".bd-example-modal-lg").show();
    });



    // Data Picker Initialization
    $(function () {
        var date_input = $('.date'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        var options = {
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
    })


});