$(document).ready(function () {
    $('#nestable').nestable({
        dropCallback: 'sourceId'
        }).on('change', function () {
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/admin/menu/guardar-orden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
            }
        });
    });

    $('.eliminar-menu').on('click', function(){
        event.preventDefault();
    })

    $('#nestable').nestable('expandAll');
});
