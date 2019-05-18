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
}

function autoSlide() {
    setInterval(function () {
        chuyenSlide();
    }, 3000);
}