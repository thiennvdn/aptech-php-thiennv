var btn = document.getElementById('btn');
var animalContainer = document.getElementById('demo');
var count = 1;
btn.addEventListener('click', function() {
    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET','https://learnwebcode.github.io/json-example/animals-'+ count +'.json');
    ourRequest.onload = function() {
        var ourData = JSON.parse(ourRequest.responseText);
        console.log(typeof(ourData));
        showData(ourData);
    }
    ourRequest.send();
    count++;
    if (count > 3) {
        btn.classList.add('hide-me');
    }
});

function showData(data) {
    // document.getElementById('demo').innerHTML = data[1].name;
    var newString = "";
    for (i = 0; i < data.length; i++){
        newString += "<p>" + data[i].name + " is a " + data[i].species + " that likes to eat ";
        for (j = 0; j < data[i].foods.likes.length; j++) {
            if (j == 0) {
                newString += data[i].foods.likes[j];
            } else {
                newString += " and " + data[i].foods.likes[j];
            }   
        }

        newString += ", and dislikes ";
        for (j = 0; j < data[i].foods.dislikes.length; j++) {
            if (j == 0) {
                newString += data[i].foods.dislikes[j];
            } else {
                newString += " and " + data[i].foods.dislikes[j];
            }   
        }

        newString += "</p>";
    }
    console.log(newString);
    // document.getElementById('demo').innerHTML = newString;
    animalContainer.insertAdjacentHTML("beforeend",newString);
}




