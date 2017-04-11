$(document).ready(function() {
	diaLaborables = JSON.parse(diaLaborables);
/*
	var obj;
	var i = 0;
	for (obj in diaLaborables) {

		var celdaDia = $("table[mes='"+diaLaborables[obj].mes+"'] tr[semana='"+diaLaborables[obj].semanaMes+"'] td[posicion="+diaLaborables[obj].diaSemana+"]");

		celdaDia.text(diaLaborables[obj].dia);
		
		if(i==31){
			break;
		}
		i++;
	}*/

	$.each(diaLaborables, function(i, obj) {

		var celdaDia    = $("table[mes='"+obj.mes+"'] tr[semana='"+obj.semanaMes+"'] td[posicion="+obj.diaSemana+"]");
		var celdaSemana = $("table[mes='"+obj.mes+"'] tr[semana='"+obj.semanaMes+"'] td[posicion=0]");

		celdaDia.text(obj.dia);
		//celdaSemana.text(obj.semanaMes);

	});
	
	$("td[valido='true']").click(function(){
	    
		alert($(this).text());

	    return true;
	});
});
