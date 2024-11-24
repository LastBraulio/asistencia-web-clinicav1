<h1 class="h2">Seguimientos</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
       
          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="seguimiento.php?v=crear_paciente" role="button">Nuevo Seguimiento</a>

        </div>
      </div>
<div class="container-fluid">
          	<div class="row">
				<div class="col-sm-4">
					<br>
					<h3>Listado de Seguimientos</h3>
					<img src='https://funcafate.org/wp-content/uploads/2015/08/evaluacion-seguimiento-control-funcafate-300x196.jpg' alt='...' width="400px">
				</div>

          		<div class="col-sm-8 table-responsive">
	          		<table table id="myTable" class="table table-hover ">
					  <thead class="bg-warning">
					    <tr>
					      <th scope="col"> Card Seguimientos</th>
					    </tr>
					  </thead>
					  <tbody>
						  <?php
						  echo $tabla;
						  ?>
					  </tbody>
					</table>
					<br><br>
				</div>

          	</div>
          	
          </div>