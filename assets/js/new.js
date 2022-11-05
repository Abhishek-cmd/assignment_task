function toasterSuccess(message,title="Project")
{
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
      
      toastr.success(message, title);
}
function toasterInfo(message,title="Project")
{
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
      
      toastr.info(message, title);
}
function toasterError(message,title="Project")
{
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
      toastr.error(message, title);
}
function toasterWarning(message,title="Project")
{
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      };
      
      toastr.warning(message, title);
}

function ucfirst(str) {
    if (typeof str == "string") {
        return str.substr(0, 1).toUpperCase() + str.substr(1);
    } else {
        return false;
    }
}

function ajaxindicatorstart(text) {
    text = (typeof text !== "undefined") ? text : "Processing your request..";

    var res = "";

    if (($("body").find("#resultLoading").attr("id")) != "resultLoading") {
        res += "<div id='resultLoading' style='display: none'>";
        res += "<div id='resultcontent'>";
        res += "<div id='ajaxloader' class='txt'>";
        res += '<svg class="lds-curve-bars" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><g transform="translate(50,50)"><circle cx="0" cy="0" r="8.333333333333334" fill="none" stroke="#ec691f" stroke-width="4" stroke-dasharray="26.179938779914945 26.179938779914945" transform="rotate(2.72337)"><animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="0" repeatCount="indefinite"></animateTransform></circle><circle cx="0" cy="0" r="16.666666666666668" fill="none" stroke="#0e4168" stroke-width="4" stroke-dasharray="52.35987755982989 52.35987755982989" transform="rotate(64.7343)"><animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.2" repeatCount="indefinite"></animateTransform></circle><circle cx="0" cy="0" r="25" fill="none" stroke="#ffffff" stroke-width="4" stroke-dasharray="78.53981633974483 78.53981633974483" transform="rotate(150.07)"><animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.4" repeatCount="indefinite"></animateTransform></circle><circle cx="0" cy="0" r="33.333333333333336" fill="none" stroke="#0e4168" stroke-width="4" stroke-dasharray="104.71975511965978 104.71975511965978" transform="rotate(239.433)"><animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.6" repeatCount="indefinite"></animateTransform></circle><circle cx="0" cy="0" r="41.666666666666664" fill="none" stroke="#ec691f" stroke-width="4" stroke-dasharray="130.89969389957471 130.89969389957471" transform="rotate(320.34)"><animateTransform attributeName="transform" type="rotate" values="0 0 0;360 0 0" times="0;1" dur="1s" calcMode="spline" keySplines="0.2 0 0.8 1" begin="-0.8" repeatCount="indefinite"></animateTransform></circle></g></svg>';
        res += "<br/>";
        res += "<span id='loadingMsg'></span>";
        res += "</div>";
        res += "</div>";
        res += "</div>";

        $("body").append(res);
    }

    $("#loadingMsg").html(text);

    $("#resultLoading").find("#resultcontent > #ajaxloader").css({
        "position": "absolute",
        "max-width": "500px",
        // "width": "500px",
        "height": "75px"
    });

    $("#resultLoading").css({
        "width": "100%",
        "height": "100%",
        "position": "fixed",
        "z-index": "10000000",
        "top": "0",
        "left": "0",
        "right": "0",
        "bottom": "0",
        "margin": "auto"
    });

    $("#resultLoading").find("#resultcontent").css({
        "background": "#ffffff",
        "opacity": "0.7",
        "width": "100%",
        "height": "100%",
        "text-align": "center",
        "vertical-align": "middle",
        "position": "fixed",
        "top": "0",
        "left": "0",
        "right": "0",
        "bottom": "0",
        "margin": "auto",
        "font-size": "16px",
        "z-index": "10",
        "color": "#000000"
    });

    $("#resultLoading").find(".txt").css({
        "position": "absolute",
        "top": "-25%",
        "bottom": "0",
        "left": "0",
        "right": "0",
        "margin": "auto"
    });

    $("#resultLoading").fadeIn(300);

    $("body").css("cursor", "wait");
}

function ajaxindicatorstop() {
    $("#resultLoading").fadeOut(300);

    $("body").css("cursor", "default");
}

$(document).ready(function(){
    $.validator.addMethod("custom_email", function(value, element) {
         return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i.test(value);
      }, "<span style='color:red;' class='fs-8 mt-2 db'>Please enter valid email address!</span>");

    $.validator.addMethod("mobile_no", function(value, element) {
    return this.optional(element) || /^[6-9]{1}[0-9]{9}$/i.test(value);
    }, "<span style='color:red;' class='fs-8 mt-2 db'>Please enter valid mobile number!</span>");

    $.validator.addMethod("selectNone",function(value, element) { 
    if (element.value == ""){ return false; } 
        else return true; 
    }, "<span style='color:red;' class='fs-8 mt-2 db'>Please select an option</span>");

    $.validator.addMethod("strongePassword", function(value) {
    return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) && /[a-z]/.test(value) && /\d/.test(value) && /[A-Z]/.test(value);
    },"<span style='color:red;' class='fs-8 mt-2 db'>The password must contain at least 1 number, 1 lower case letter and 1 upper case letter</span>");

    $.validator.addMethod("valid_amount", function(value, element, param) {
       var re = new RegExp('^[1-9][0-9]{9}$');
       //var re = new RegExp('/^(?:[\d-]*,?[\d-]*\.?[\d-]*|[\d-]*\.[\d-]*,[\d-]*)$/');
       return this.optional(element) || re.test( value ); // Compare with regular expression
    },"<span style='color:red;' class='fs-8 mt-2 db'>Enter a valid amount value, does not start with 0</span>");

    $.validator.addMethod("valid_ctc", function(value, element) { 
    return this.optional(element) || /^[1-9][0-9]+$/i.test(value); 
    }, "<span style='color:red;'>Enter a valid amount value, does not start with 0</span>");
});