$("#idInsumo").change(function(event) {
	$.get("factura/"+event.target.value+"",fucntion(response, idInsumo){
		console.log(response);
	});
});