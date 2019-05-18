// var ten = 'Nguyen Viet Thien';
// var lop = 'PHP-18';
// var thongBao = ten +' '+ lop;

// console.log(thongBao);

// function hienThiKetQua() {
//     document.getElementById('demo').innerHTML = 'Xin Chao';
// }
// function hienThiThayDoi() {
//     document.getElementById('a').style.fontSize = "100px";
// }
var imageElement = document.getElementById('image');

console.log(imageElement.src);

function bongDen() {
    if (imageElement.src == 'http://127.0.0.1:5500/pic_bulboff.gif') {
        imageElement.src = 'pic_bulbon.gif';
    } else {
        imageElement.src = 'pic_bulboff.gif';
    }
}