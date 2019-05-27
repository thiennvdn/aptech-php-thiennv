$('button').click(function() {
    $.get('data.json', function (data, status) {
        console.log(data.users);

        //tao head table: ID, Name, Email
        var arrayHead = ['ID','Name','Email'];
        var head = ''; 
        for (var i = 0; i < arrayHead.length; i ++) {
          head += '<th>'+ arrayHead[i] + '</th>';
        }
        //tao body table
        var body = '';
        for (var i = 0; i < data.users.length; i++) {
            var dataBody = '';
            var array = [data.users[i].id, data.users[i].name, data.users[i].email];
            var a = '';
            for (var j = 0; j < array.length; j++) {
                a += '<td>'+ array[j] + '</td>';
                console.log(a);
            }
            dataBody += '<tr>'+ a + '</tr>';
            console.log(dataBody);
            body += dataBody; 
        }   
        console.log(body); 
        
        //xuat bang ra man hinh khi click button
        $('button').after('<table><thead><tr>' + 
        head
        +'</tr></thead>'+
        '<tbody>'+
        body
        +'</tbody></table>')
    })
})