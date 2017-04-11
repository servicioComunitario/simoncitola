function setDiaNoLaborable(celdaDia) {
	celdaDia.removeClass('txt-info');
	celdaDia.removeClass('bg-info');
	celdaDia.removeClass('txt-success');
	celdaDia.removeClass('bg-success ');

	celdaDia.addClass('text-danger');
	celdaDia.addClass('bg-danger');
	celdaDia.attr('tipo', '0'); 
}

function setDiaAdministrativo(celdaDia) {
	celdaDia.removeClass('txt-danger');
	celdaDia.removeClass('bg-danger');
	celdaDia.removeClass('txt-success');
	celdaDia.removeClass('bg-success');

	celdaDia.addClass('text-info');
	celdaDia.addClass('bg-info');
	celdaDia.attr('tipo', '1'); 
}

function setDiaEscolar(celdaDia) {
	celdaDia.removeClass('txt-danger');
	celdaDia.removeClass('bg-danger');
	celdaDia.removeClass('txt-danger');
	celdaDia.removeClass(' bg-danger');

	celdaDia.addClass('text-success');
	celdaDia.addClass('bg-success');
	celdaDia.attr('tipo', '2'); 
}

function cargarDias(){
	diaLaborables = JSON.parse(diaLaborables);

	//console.log(diaLaborables[0]);

	$.each(diaLaborables, function(i, obj) {

		var celdaDia    = $("table[mes='"+obj.mes+"'] tr[semana='"+obj.semanaMes+"'] td[posicion="+obj.diaSemana+"]");
		var celdaSemana = celdaDia.parent().find('td:first');
		
		celdaDia.text(obj.dia);
		celdaDia.addClass('valido');

		obj.tipo = Math.floor(Math.random() * 3);

		//console.log(obj.tipo);

		if(obj.finSemana || !obj.tipo){ //fin de semana o dia no laborable
			setDiaNoLaborable(celdaDia);
		}

		if(obj.tipo==1){ // dia administrativo
			setDiaAdministrativo(celdaDia);
		}else{
			if(obj.tipo==2){ //dia académico
				setDiaEscolar(celdaDia);
			}
		}

		//celdaSemana.text(obj.semanaMes);

		//console.log(celdaDia.parent().find('td:first'));
		//celdaSemana.text(obj.semanaMes);

	});
}

function cambiarEstado(celdaDia) {
	var tipo = celdaDia.attr('tipo');

	tipo = (tipo+1)%3;

	switch(tipo){
		case 0:{
			setDiaNoLaborable(celdaDia);
		}break;
		case 1:{
			setDiaAdministrativo(celdaDia);
		}break;
		case 2:{
			setDiaEscolar(celdaDia);
		}break;
	}
}


$(document).ready(function() {
	cargarDias();
	
	$("td.valido").click(function(){
		cambiarEstado($(this));
	});
});
