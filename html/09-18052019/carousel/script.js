console.log(typeof(document.getElementById('hinh-1').style.display));


function chuyenSlide() {
    if (document.getElementById('hinh-1').style.display == 'block') {
        document.getElementById('hinh-1').style.display = 'none';
        document.getElementById('hinh-2').style.display = 'block';
        document.getElementById('hinh-3').style.display = 'none';
    } else {
        if (document.getElementById('hinh-2').style.display == 'block') {
            document.getElementById('hinh-1').style.display = 'none';
            document.getElementById('hinh-2').style.display = 'none';
            document.getElementById('hinh-3').style.display = 'block';
        } else {
            document.getElementById('hinh-1').style.display = 'block';
            document.getElementById('hinh-2').style.display = 'none';
            document.getElementById('hinh-3').style.display = 'none';
        }
    }
    setTimeout(chuyenSlide,2000);
}

setTimeout(chuyenSlide,2000);

// function autoSlide() {
//     setInterval(function () {
//         chuyenSlide();
//     }, 3000);
// }

// setInterval(chuyenSlide, 2000);

var myVar = setInterval(myClock, 1000);
function myClock() {
    var d = new Date();
    var t = d.toLocaleTimeString();
    document.getElementById('demo').innerHTML = t;
}