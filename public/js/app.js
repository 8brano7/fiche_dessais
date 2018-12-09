$(document).ready(function () {


    $('#zaznam-form').submit(function (e) {
        e.preventDefault();

        // var zaznamId = $(e.currentTarget).data('zaznam-id');
        var formData = new FormData(e.currentTarget);
        console.log($('#zaznam-form').serializeArray());

        //  console.log(zaznamId);
        console.log('/zaznam_form/');

        $.ajax({
            url: ('/zaznam_form'),
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST'
            // vrati ak je vsetko OK
        }).done(function (data) {
            alert(data.msg);
            // vrati ak je chyba - je to definovane aj v kontroleri
        }).fail(function (data) {
            alert(data.msg);
        });
    });









    $('select').selectpicker();





})