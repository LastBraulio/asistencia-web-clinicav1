<h1 class="h2">Listar Tareas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
       
          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="tareas.php?v=crear_paciente" role="button">Nueva Tarea</a>

        </div>
      </div>
<div class="container-fluid">
          	<div class="row">

			  <div class="col-sm-12 table-responsive">
	          		<table id="myTable" class="table table-hover ">
					  <thead class="bg-warning">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col"># Paciente</th>
					      <th scope="col">Observacion</th>
					      <th scope="col">Tarea</th>
					      <th scope="col">Fecha I.</th>
					      <th scope="col">Fecha F.</th>
					      <th scope="col">Opciones</th>
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