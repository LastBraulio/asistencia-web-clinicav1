<h1 class="h2">Crear Tareas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="tareas.php?v=listar_pacientes">Tareas</a></li>
					<li class="breadcrumb-item active" aria-current="page">Crear Tareas</li>
				</ol>
			</nav>
        </div>
      </div>
	<div class="container">
          	<div class="row">
          		<div class="col-sm-2">
          			
          		</div>
          		<div class="col-sm-8">
	          		<form action="tareas.php?v=insert"method="post">
	          		<h1>Ingrese su Informacion</h1>
					  <div class="form-group">
					    <label for="inputidpaciente"># Paciente</label>
					    <input type="text" class="form-control" id="inputidpaciente"  name="inputidpaciente" placeholder="Ingrese # Paciente">
					  </div>
					  <div class="form-group">
					    <label for="inputobservar">Observaciones</label>
  						<textarea class="form-control rounded-0" id="inputobservar" name="inputobservar" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="inputtarea">Tarea</label>
					    <input type="text" class="form-control" id="inputtarea" name="inputtarea" placeholder="Ingrese Tarea">
					  </div>


					  <div class="form-group">
					    <label for="inputfechainicio">Fecha de Inicio</label>
					    <input type="date" class="form-control" id="inputfechainicio" name="inputfechainicio" >
					  </div>
					  <div class="form-group">
					    <label for="inputfechafinal">Fecha de Final</label>
					    <input type="date" class="form-control" id="inputfechafinal" name="inputfechafinal" >
					  </div>
					 
					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div>
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>