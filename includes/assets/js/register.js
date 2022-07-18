$(document).ready(function(){

    $("#hideLogin").click(function() {
        // console.log("login pressed");
        $("#loginForm").hide();
        $("#registerForm").show();
    });
    $("#hideRegister").click(function() {
        // console.log("register pressed");
        $("#loginForm").show();
        $("#registerForm").hide();
    });
});