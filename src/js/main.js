console.log('admin js')
$(document).ready(function () {
    // next buttons
    $("#nxt_btn_step1").click(function (e) { 
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").show();
        $("#step_3").hide();
    });
    
    $("#nxt_btn_step2").click(function (e) { 
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").hide();
        $("#step_3").show();
    });

    // back buttons
    $("#bk_btn_step2").click(function (e) { 
        e.preventDefault();
        $("#step_1").show();
        $("#step_2").hide();
        $("#step_3").hide();
    });
    $("#bk_btn_step3").click(function (e) { 
        e.preventDefault();
        $("#step_1").hide();
        $("#step_2").show();
        $("#step_3").hide();
    });

});