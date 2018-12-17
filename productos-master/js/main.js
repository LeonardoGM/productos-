$(function () {
	$('#ddlmenu').change(function () {
		switch($('#ddlmenu').val()){
			case "mp3":
				$('#txtvalor').val(90000);
				break;
			case "mp4":
				$('#txtvalor').val(180000);
				break;
			case "ipod":
				$('#txtvalor').val(600000);
				break;
			default:
				$('#txtvalor').val("");
				break;
		}
	});
	$('#btnMostrar').click(function () {
		if($('#txtCantidad').val()===""){
			$('#txtSubTotal').val("Faltan datos");
			$('#txtTotalRecargo').val("Faltan datos");
			$('#txtTotal').val("Faltan datos");
		}
		else
		{
			$('#txtSubTotal').val($('#txtCantidad').val() * $('#txtvalor').val());
			$('#txtTotalRecargo').val(($('#txtSubTotal').val() * $('input:radio[name=porcentaje]:checked').val()) /100);
			$('#txtTotal').val(parseInt($('#txtSubTotal').val()) + parseInt($('#txtTotalRecargo').val()));
		}
	});
});