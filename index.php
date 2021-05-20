<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Capacita</title>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!--==============Estilos adicionales===============-->

	<!--dataTables-->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
	<!--Termina dataTables -->
	<link rel="stylesheet" href="css/toastr.min.css">
	<link rel="stylesheet" href="css/estilos-registro.css">
	 
</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">

       

        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                <!-- ================================
                     Star content 
                ================================ -->

                <div class="breadcrumb">
                    <h1>listado de usuarios</h1>
                </div>
                <div class="separator-breadcrumb border-top">
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="card-body">
						<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Nuevo usuario</button>
							<div class="row">
								<div class="col">
									<section class="card">
										<div class="card-body" id="datos">
										<!--
											<table id="example" class="display nowrap responsive" style="width:100%">
												<thead>
													<tr>
														<th>#</th>
														<th>Correo</th>
														<th>Nombre</th>
														<th>Apellido paterno</th>
														<th>Apellido materno</th>
														<th>Acciones</th>
													</tr>
												</thead>
												<tbody>
														<td>#</td>
														<td>Correo</td>
														<td>Nombre</td>
														<td>Apellido paterno</td>
														<td>Apellido materno</td>
														<td><a class="btn btn-info" href="#" style="padding-left:10px">Editar</a><a  style="padding-left:10px"  class="btn btn-info" href="#">Borrar</a></td>
														
												</tbody>
											</table>-->
										</div>
									</section>
								</div>
							</div>
						</div>
                    </div>
                </div>
				<!--Modal Registro -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5><br>
							 

							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true">&times;</span>
							</button>
						  </div>
						  <div class="modal-body">
							 <form id="form-registro" class="group" autocomplete="nope" action="" method="POST" onsubmit="return false;" accept-charset="utf-8">
								<div class="form-group">
								  <div class="col-md-12">
									<label class="col-form-label">Nombre</label>
									<input class="form-control" type="text" name="nombre" id="nombre">
								  </div>
									
								 </div>
								 <div class="form-group">
								  <div class="col-md-12">
									<label class="col-form-label">Apellido Paterno</label>
									<input class="form-control" type="text" name="apellidop" id="apellidop">
								  </div>

								  <div class="col-md-12">
									<label class="col-form-label">Apellido Materno</label>
									<input class="form-control" type="text" name="apellidom" id="apellidom">
								  </div>
								 </div>

								 <div class="form-group">
								   <div class="col-md-12">
									 <label class="col-form-label">Correo</label>
									 <input type="email" name="email-registro" id="email-registro" class="form-control">
								   </div>
								 </div>
								</form>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal" >Cerrar</button>
							<button type="button" class="btn btn-primary" id="btn-registro">Guardar</button>
						  </div>
						</div>
					 </div>
				</div>
				<!--modal edital--->
				<div id="tvesModal" class="modalContainer">
				  <div class="contenedor contenido-registro modal-content" style=" border-radius: 10px;">
					<div style="text-align: right;">
					  <a href="#close" title="Close" class="close1" onclick="cerrar1()" style="font-size: 18px; color: #12151C;"><i class="fas fa-times"></i></a>
					</div>
					<div id="datosusuario" class="contenido-registro">
					 
					</div>
				  </div>
				</div>

                <!-- ================================
                     End content 
                ================================ -->
            </div>    
        </div>
    </div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
	<!-- Codigo para datatables --->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
	<script src="js/registro.js"></script>
	<script src="js/obtienedatos.js"></script>
	 <script src="js/toastr.js"></script>
	  <script src="js/editar.js"></script>
	 
	<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
	} );

	</script>
</body>
</html>