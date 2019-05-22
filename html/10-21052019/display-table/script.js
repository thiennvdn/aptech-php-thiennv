var data = {
    "users": [{
        "id": 10,
        "name": "Ethyl Medhurst",
        "email": "noah.hand@example.org",
        "password": "$2y$10$GLfHbVK./jG2WD8QQ0.ZDOqqeJe7rz.hl827sKoHOhd9LLoXfyHHG",
        "created_at": "2019-03-26 04:55:04",
        "updated_at": "2019-03-26 04:55:04"
      },
      {
        "id": 9,
        "name": "Eula Lebsack PhD",
        "email": "schroeder.sylvan@example.org",
        "password": "$2y$10$.vzCIUVX34GibJ3.ObFqYu5Bd.Ig8PqF3adoLHza78eq510mfhy9G",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      },
      {
        "id": 8,
        "name": "Mrs. Kathlyn Parisian DDS",
        "email": "ggrimes@example.net",
        "password": "$2y$10$N.DpYW9Sd0c8p3rSVjO0MeZ5e7idfPeKPZyOO77m8vNSEOnMws5O2",
        "created_at": "2019-03-26 04:55:03",
        "updated_at": "2019-03-26 04:55:03"
      }
    ]
  };

var tableElement = document.createElement('table');
var theadElement = document.createElement('thead');
var tbodyElement= document.createElement('tbody');


// var trhead = document.createElement('tr');
// var trheadth = document.createElement('th');

function create (nameOfElement){
    return document.createElement(nameOfElement);
}
var trHead = create('tr');
// var trheadth1 = create('th');
// var trheadth2 = create('th');
// var trheadth3 = create('th');

// trheadth1.appendChild(document.createTextNode('ID'));
// trheadth2.appendChild(document.createTextNode('Name'));
// trheadth3.appendChild(document.createTextNode('Email'));

// trhead.appendChild(trheadth1);
// trhead.appendChild(trheadth2);
// trhead.appendChild(trheadth3);

//chay vong lap for de tao thead

var arrayHeading = ['ID', 'Name', 'Email'];
for (var i = 0; i < arrayHeading.length; i++) {
  var th = create('th');
  th.appendChild(document.createTextNode(arrayHeading[i]));
  trHead.appendChild(th);
}

theadElement.appendChild(trHead);

//chay vong lap for de tao tbody

for (var i = 0; i < data.users.length; i++) {
  var trBody = create('tr');
  tbodyElement.appendChild(trBody);
  var arrayData = [data.users[i].id, data.users[i].name, data.users[i].email];
  for (var j = 0; j < arrayData.length; j++){
    var td = create('td');
    td.appendChild(document.createTextNode(arrayData[j]));
    trBody.appendChild(td);
  }
}


tableElement.appendChild(theadElement);
tableElement.appendChild(tbodyElement);
document.body.appendChild(tableElement);