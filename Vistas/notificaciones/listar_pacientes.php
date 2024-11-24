<h1 class="h2">Notificaciones</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
       
          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="notificaciones.php?v=crear_notify&opcion=1" role="button">Nuevo Notificacion</a>

        </div>
      </div>
<div class="container-fluid">
          	<div class="row">

          		<div class="col-sm-12 table-responsive">
				  <table id="myTable" class="table table-hover ">
					  <thead class="bg-warning">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col"># Tarea</th>
					      <th scope="col">Notificacion</th>
					      <th scope="col">Fecha Sistema</th>
					      <th scope="col">Hora Actividad</th>
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