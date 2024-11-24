<h1 class="h2">Editar Tareas</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="tareas.php?v=listar_pacientes">Paciente</a></li>
					<li class="breadcrumb-item active" aria-current="page">Editar Paciente</li>
				</ol>
			</nav>
        </div>
      </div>
	<div class="container">
          	<div class="row">
          		<div class="col-sm-2">
          			
          		</div>
          		<div class="col-sm-8">
	          		<form>
	          		<h1>Ingrese su Informacion</h1>
	          		<input type="hidden" class="form-control" id="inputid" name="inputid">
					  <div class="form-group">
					    <label for="inputidpaciente"># Paciente</label>
					    <input type="text" class="form-control" id="inputidpaciente" aria-describedby="emailHelp" placeholder="Ingrese # Paciente">
					  </div>
					  <div class="form-group">
					    <label for="inputobservar">Observaciones</label>
  						<textarea class="form-control rounded-0" id="inputobservar" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="inputtarea">Tarea</label>
					    <input type="text" class="form-control" id="inputtarea" aria-describedby="emailHelp" placeholder="Ingrese Tarea">
					  </div>


					  <div class="form-group">
					    <label for="inputfechainicio">Fecha de Inicio</label>
					    <input type="date" class="form-control" id="inputfechainicio" >
					  </div>
					  <div class="form-group">
					    <label for="inputfechafinal">Fecha de Final</label>
					    <input type="date" class="form-control" id="inputfechafinal" >
					  </div>
					 
					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div>
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>