$(document).ready(function() {
    $("#hinh-1").click(function() {
        $("#hinh-1").css("display","none");
        $("#hinh-2").css("display","block");
    })
    $("#hinh-2").click(function() {
        $("#hinh-2").css("display","none");
        $("#hinh-3").css("display","block");
    })
    $("#hinh-3").click(function() {
        $("#hinh-3").css("display","none");
        $("#hinh-1").css("display","block");
    })
})

