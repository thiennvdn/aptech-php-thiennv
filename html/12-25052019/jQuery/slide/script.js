//cach 1:
// $(document).ready(function() {
//     $("#hinh-1").click(function() {
//         $("#hinh-1").css("display","none");
//         $("#hinh-2").css("display","block");
//     })
//     $("#hinh-2").click(function() {
//         $("#hinh-2").css("display","none");
//         $("#hinh-3").css("display","block");
//     })
//     $("#hinh-3").click(function() {
//         $("#hinh-3").css("display","none");
//         $("#hinh-1").css("display","block");
//     })
// })

//cach 2:

$('#hinh-2').hide();
$('#hinh-3').hide();

$(document).ready(function() {
    $('#hinh-1').click(function() {
        $('#hinh-1').hide();
        $('#hinh-2').show();
    })
    $('#hinh-2').click(function() {
        $('#hinh-2').hide();
        $('#hinh-3').show();
    })
    $('#hinh-3').click(function() {
        $('#hinh-3').hide();
        $('#hinh-1').show();
    })
})

