$(document).ready(function() {
	$('#fecha_nacimiento').daterangepicker({
		locale: {
	        format: "DD-MM-YYYY",
	        separator: " - ",
	        daysOfWeek: [
	            "Do",
	            "Lu",
	            "Ma",
	            "Mi",
	            "Ju",
	            "Vi",
	            "Sá"
	        ],
	        "monthNames": [
	            "Enero",
	            "Febrero",
	            "Marzo",
	            "Abril",
	            "Mayo",
	            "Junio",
	            "Julio",
	            "Agosto",
	            "Septiembre",
	            "Octubre",
	            "Noviembre",
	            "Diciembre"
	        ],
	        firstDay: 1
	    },
		singleDatePicker : true,
		singleClasses    : "picker_3",
	});

});