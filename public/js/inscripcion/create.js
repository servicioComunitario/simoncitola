var url = "/representantes"

$('#cedulaPadre, #cedulaMadre ').blur(function(event) {
	var tipo = $(this).attr("id").substring(6);

	$('.'+tipo).prop('disabled', true);

	$.get(url + '/' + $(this).val()+'/find', function (data) {

    if (data.code) {
	    var representante = data.representante[0];
	    $('input[name=nombre'+tipo+']').val(representante.nombre);
    } else {
    	$('.'+tipo).prop('disabled', false);
    	console.log('entre aqui');
    }

  });


});