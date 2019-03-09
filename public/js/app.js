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
            console.log(data.mail);

            $('#outlook-btn').attr('href', data.mail);

            $('#outlook-btn')[0].click(function(){
            });

            // $('#outlook-btn').trigger("click");
            // vrati ak je chyba - je to definovane aj v kontroleri
        }).fail(function (data) {
            alert(data.msg);
        });
    });




    //
    // function formAutoSubmit () {
    //     var frm = document.getElementById("outlook-btn");
    //     frm.submit();
    // }
    // window.onload = formAutoSubmit;


    //
    $('select').selectpicker();



})
















