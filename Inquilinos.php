<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" -|lang="es">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Oscar Vanegas">
	<meta name="keywords" content="inicio, pagina, vanegas">
	<meta name="descriptio" content="esta es una pagina web ser usado para la familia">
	<meta name="Copyright" content="Vanegas s.a.s.">
	
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/inquilinos.css">

	<!--Link de boostrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<!--Iconos bootstrap-->
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<title>Inquilinos</title>
</head>


<body>

<div class="contenedor">

<?php
	include()
?>	
 <main>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Inquilinos</h1>
				<p>Esta pagina tiene como objetivo crear,leer, actualizar y eliminar informacion de los inquilinos.</p>
			</div>
		</div>
	</div>	

	<div class="container py-2">
		<div class="text-center">
			<div class="btn btn-primary btn-lg " data-bs-toggle="modal" data-bs-target= "#mi-modal2">Crear inquilino</div>	
		</div>
	</div>
	<div class="modal fade" id="mi-modal2" data-bs-backdrop="static">
		<!-- aqui mostramos, colocamos scroll y centramos el modal-->
		<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered ">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Registrar inquilino</h5>
					<button class="btn-close" data-bs-dismiss="modal"></button>
				</div>
				<div class="modal-body">
				<!--Formulario modal----------------------------------------------------->
					<form action="php/inquilinos.php" method="POST" id="form" class="col-12  ">
						<h3 class="text-center text-secundary">Ingresar datos</h3>

						<div class="mt-3 mb-3">
		  					<label for="exampleFormControlInput1" class="form-label">Locacion</label>

		  					<select class="form-select" id= "locacion" name="location" >
  									<option name="location" value="0"  selected>Seleccionar...</option>
  									<option name="location" value="1">Casa hermanos</option>
  									<option name="location" value="2">Casa papa</option>
  									<option name="location" value="3">Bodega latas</option>
  									<option name="location" value="4">Chircal</option>
  									<option name="location" value="5 ">Casa alex cumaral</option>
							</select>
		  					 
						</div>


						<div class=" mb-3">
		  					<label for="exampleFormControlInput1" class="form-label">Nombre y apellido</label>
		  					<input type="text" class="form-control"  id="nombre" name="name"  >
						</div>
						<div class="mb-3">
		  					<label for="exampleFormControlInput1" class="form-label">Celular</label>
		  					<input type="number" class="form-control" id="celular" name="phone" >
						</div>
						<div class="mb-3">
		  					<label for="exampleFormControlInput1" class="form-label">Email</label>
		  					<input type="email" class="form-control" id="correo" name="email" >
						</div>						
						<div class="mb-3">
		  					<label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
		  					<textarea type="text" class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
						</div>
						<div class="mb-3 text-center">
							<button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary " id="btn-guardar" >Guardar</button>
							<p class="warnings" id="warnings"></p>	
						</div>

					</form>			
				<!---------------------------------------------------------------------->
				</div>
					<div class="modal-footer"><!--Botones del modal-->
						
					</div>
			</div>
		</div>	
	</div>



 </main>
 <aside>
 	<div class="container">
		<table class="table">
  			<thead>
    			<tr>
      				<th scope="col">id</th>
      				<th scope="col">Locación</th>
      				<th scope="col">Nombre</th>
      				<th scope="col">Celular</th>
      				<th scope="col">Comentario</th>
      				<th></th>
    			</tr>
  			</thead>
  			<tbody>
    			<tr>
      				<th scope="row">1</th>
      				<td>Mark</td>
      				<td>Otto</td>
      				<td>@mdo</td>
      				<td></td>
      				<td> <a href="crear.html" class="btn btn-small btn-warning"><i class="bi bi-pencil-square"></i></a> <a href=""class="btn btn-small btn-danger"><i class="bi bi-trash">
					</td>
    			</tr>
    			<tr>
      				<th scope="row">2</th>
      				<td>Jacob</td>
      				<td>Thornton</td>
      				<td>@fat</td>
    			</tr>
    			<tr>
      				<th scope="row">3</th>
      				<td colspan="2">Larry the Bird</td>
      				<td>@twitter</td>
    			</tr>
  			</tbody>
		</table>
	</div>
 </aside>
	


</div>			
			
	<script  src="js/validar-inquilinos.js"></script>
	
	<!--Link de boostrap javascript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>	
</body>
</html>