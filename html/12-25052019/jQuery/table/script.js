$('button').click(function() {
    $.get('duong dan', function (data, status) {
        console.log(data, status);
    })
})