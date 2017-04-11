function setDiaNoLaborable(celdaDia) {

	if(celdaDia.hasClass('finSemana')){
		celdaDia.removeClass('escolarFinSemana administrativoFinSemana');
	}else{
		celdaDia.removeClass('administrativo ');
		celdaDia.addClass('noLaborable');
	}

	celdaDia.attr('tipo', '0'); 
}

function setDiaAdministrativo(celdaDia) {

	if(celdaDia.hasClass('finSemana')){
		celdaDia.removeClass('noLaborableFinSemana escolarFinSemana');
		celdaDia.addClass('administrativoFinSemana');
	}else{
		celdaDia.removeClass('noLaborable');
		celdaDia.addClass('administrativo');
	}

	celdaDia.attr('tipo', '1'); 
}

function setDiaEscolar(celdaDia) {

	if(celdaDia.hasClass('finSemana')){
		celdaDia.removeClass('administrativoFinSemana noLaborableFinSemana');
		celdaDia.addClass('escolarFinSemana');
	}else{
		celdaDia.removeClass('administrativo noLaborable');
		celdaDia.addClass('escolar');
	}

	celdaDia.attr('tipo', '2'); 
}

function setFinSemana(celdaDia) {
	celdaDia.addClass('finSemana');
}

function cambiarEstado(celdaDia, aumenta) {
	var tipo = celdaDia.attr('tipo');

	tipo = (tipo+aumenta)%3;

	if(celdaDia.finSemana){
		setFinSemana(celdaDia);
	}

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

function cargarDias(){

	calendarioLaboral = JSON.parse(calendarioLaboral);
	
	var obj;
	var celdaDia;
	var celdaSemana;
	var semanaAnio = -1;
	for (var i = 0; i < calendarioLaboral.length; i++) {
		obj = calendarioLaboral[i];

		celdaDia = $("table[mes='"+obj.mes+"'] tr[semana='"+obj.semanaMes+"'] td[posicion="+obj.diaSemana+"]");
		
		//obj.tipo = Math.floor(Math.random() * 3);
		//obj.tipo = 2;

		celdaDia.text(obj.dia);
		celdaDia.addClass('valido');

		if(obj.finSemana){
			celdaDia.addClass('finSemana');
			celdaDia.attr('tipo', 0);
		}else{
			celdaDia.attr('tipo', 2);
		}

		cambiarEstado(celdaDia); 

		if(semanaAnio!=obj.semanaMes){
			semanaAnio = obj.semanaMes;
			celdaSemana = celdaDia.parent().find('td:first');
			celdaSemana.text(obj.semanaMes);
			celdaSemana.addClass('numSemana');

			if(obj.semanaMes==5){
				celdaSemana.parent().removeAttr('hidden');
			}
		}
	}
}




$(document).ready(function() {
	cargarDias();
	
	$("td.valido").click(function(){
		cambiarEstado($(this), 1);
	});
});
