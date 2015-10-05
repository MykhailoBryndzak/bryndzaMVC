$(function () {


//видалення комента
    $('.del').live('click', function () {
        delItem = $(this);
        var id = $(this).attr('rel');
        $.post('dashboard/xhrDeleteListing', {'id': id}, function (o) {
            $("#listInserts").append('<div>' + o.text + '<a href="#" class="del" rel="' + o.id + '">X</a></div>');
            delItem.parent().remove();
        }, 'json');
        return false;
    });
//запис повідомлення
    $('#randomInsert').submit(function () {
        var url = $(this).attr('action');
        var data = $(this).serialize();
        $.post(url, data, function (o) {
            alert(1);
        });
        return false;
    });
    //запис комента в чаті
    $.post(url, data, function (o) {
        $("#listInserts").append('<div>' + o.text +
            '<a href="#" class="del" rel="' + o.id + '">X</a></div> ');
    }, 'json');
//отримання чату
    $.get('dashboard/xhrGetListings', function (o) {
        for (var i = 0; i < o.length; i++) {
            $("#listInserts").append('<div>' + o[i].text +
                '<a href="#" class="del" rel="' + o[i].id + '">X</a></div>');
        }
    }, 'json');

});

