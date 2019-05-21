var array = ['Nam','A','B'];

console.log(array);

var index = 0;

document.getElementById('nguoi-so-'+(index +1)).innerHTML = array[index];

for (var index = 0; index < array.length; index++) {
    document.getElementById('nguoi-so-'+(index +1)).innerHTML = array[index];
}
