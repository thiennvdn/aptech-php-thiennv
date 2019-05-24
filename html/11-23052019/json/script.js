// function getData() {
//     var xhttp = new XMLHttpRequest();//XMLHttpRequest(): mot class
//     xhttp.onreadystatechange = function() {
//         // console.log(this.readyState);
//         if (this.readyState == 4 && this.status == 200) {
//             console.log(typeof(this.responseText));//String
//             var jsonData = JSON.parse(this.responseText);//chuyen tu string sang JSON (object)
//             console.log(typeof(jsonData));//Object
//             console.log(jsonData.interests);//Lay array Interests
//             document.getElementById('demo').innerHTML = jsonData.interests;//Dua ra man hinh.
//         }
//     };
//     xhttp.open("GET","data.json",true);
//     xhttp.send();
// }

function storeJSON() {

    //Storing Data
    var myObj = {"name": "Thien", "age": 18, "city": "Da Nang"};
    var myJSON = JSON.stringify(myObj);
    console.log(typeof(myJSON));
    localStorage.setItem('store.json', myJSON);

    //Retrieving Date
    var text = localStorage.getItem('store.json');
    console.log(typeof(text));
    var obj = JSON.parse(text);
    console.log(typeof(obj));
    document.getElementById('demo').innerHTML = obj.city;
}