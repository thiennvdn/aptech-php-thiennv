// function tryAJAX() {
//     var xhttp = new XMLHttpRequest();
//     xhttp.onreadystatechange = function() {
//         if (this.readyState == 4 && this.status == 200) {
//             document.getElementById('demo-2').innerHTML = this.responseText;
//         }
//     };
//     xhttp.open('GET','demo_get.asp',true);
//     xhttp.send();
// }

function tryAJAX2(url, changeFunction) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200){
            changeFunction(this);
        }
    };
    xhttp.open('GET',url,true);
    xhttp.send();
}

function myFunction(xhttp) {
    document.getElementById('demo-2').innerHTML = xhttp.responseText;
}