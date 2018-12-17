<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ejercicio</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/direct.css">
    </head>
    <body>
        
		<div class="container">
			<div class="row mt-3">
				<div class="col-12 text-center">
					<h1>Venta de articulos.</h1>
				</div>
			</div>
			<form action="" id="frmejercicio" class="directForm mt-3">
				
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						Tipo de Repoductor
					</div>
					<div class="col-md-6">
						<select name="" id="ddlmenu">
							<option class="opcionmenu"  value="nulo">Seleccione un articulo</option>
						    <option class="opcionmenu"  value="mp3">Mp3</option>
						    <option class="opcionmenu" value="mp4">Mp4</option>
						    <option class="opcionmenu" value="ipod">Ipod</option>
						</select>
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						Valor
					</div>
					<div class="col-md-6">
						<input type="text" readonly="" id="txtvalor">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						Cantidad
					</div>
					<div class="col-md-6">
						<input type="number" min="1" id="txtCantidad">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						Recargo
					</div>
					<div class="col-md-6">
						<input type="radio" name="porcentaje" value="5" checked="">5%
						<input type="radio" name="porcentaje" value="10" class="ml-2">10%
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						subtotal
					</div>
					<div class="col-md-6">
						<input type="text" readonly="" id="txtSubTotal">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						Total Recargo
					</div>
					<div class="col-md-6">
						<input type="text" readonly="" id="txtTotalRecargo">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-md-6 text-right">
						Total
					</div>
					<div class="col-md-6">
						<input type="text" readonly="" id="txtTotal">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-12 text-center">
						<input type="button" id="btnMostrar" class="btn btn-dark directBtn" value="Mostrar Totales">
					</div>
				</div>
			</form>
		</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>