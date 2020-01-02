//boton para borrar campos de formulario
$(document).ready(function(){
    //cierra alertas automaticamente
    $('.alert[data-auto-dismiss]').each(function(index,element){
        const $element = $(element),
            timeout = $element.data('auto-dismiss') || 5000;
        setTimeout(function(){
            $element.alert('close');
        }, timeout);
    });
    //tooltips
    $('body').tooltip({
        trigger: 'hover',
        selector: '.tooltipsC',
        placement : 'top',
        html: true,
        container: 'body'
    });
    
    $('ul.sidebar-menu').find('li.active').parents('li').addClass('active');
});