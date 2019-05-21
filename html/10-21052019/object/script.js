var thien = {
    name: 'Thien',
    age: 19,
    "gioi-tinh": 'male',
    "name-of-dogs": [
        'nobita', 'doremom'
    ],
    tiengKeu: function() {
        console.log('aaaa');
        return {
            name: 'Tam',
        }
    }
};

console.log(thien.name);
console.log(thien['gioi-tinh']);
console.log(thien['name-of-dogs']);
thien.tiengKeu();
console.log(thien.tiengKeu().name);

// document.getElementById('name-1').innerHTML = thien['name-of-dogs'][0];
// document.getElementById('name-2').innerHTML = thien['name-of-dogs'][1];

var arrayNameOfDogs = thien['name-of-dogs'];

for (var i = 0; i < arrayNameOfDogs.length; i++) {
    var heading = document.createElement('h1');//tao h1
    var contentOfHeading = document.createTextNode(arrayNameOfDogs[i]);//tao noi dung
    heading.appendChild(contentOfHeading);//nhet noi dung do vao h1

    var styleAtr = document.createAttribute('style');
    styleAtr.value = 'color: red';
    heading.setAttributeNode(styleAtr);

    document.body.appendChild(heading);//nhet heading vao body
}

var tieuDe = document.createElement('h1');
var noiDung = document.createTextNode('XIN CHAO CAC BAN');
tieuDe.appendChild(noiDung);
document.body.appendChild(tieuDe);

