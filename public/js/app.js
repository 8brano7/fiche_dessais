$(document).ready(function () {


    $('#zaznam-form').submit(function (e) {
        e.preventDefault();

        // var zaznamId = $(e.currentTarget).data('zaznam-id');
        var formData = new FormData(e.currentTarget);
        console.log($('#zaznam-form').serializeArray());

        //  console.log(zaznamId);
        console.log('/zaznam_form/');
        var locale = $('#zaznam-form').data('my-locale');
        var url = `/${locale}/zaznam_form`;

        $.ajax({
            url: url,
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


    $('select').selectpicker();
    $('.js-datepicker').datetimepicker({format: 'DD/MM/YYYY'});
    //YYYY-MM-DD HH:mm
    $('.datetimepicker').datetimepicker({format: 'DD/MM/YYYY HH:mm'});


})
















