<h1 class="h2">Elegir Tarea</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
       
        <nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="pacientes.php?v=listar_pacientes">Notificaciones</a></li>
					<li class="breadcrumb-item active" aria-current="page">Elegir Tarea</li>
				</ol>
			</nav>

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