<h1 class="h2">Crear Seguimiento</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="seguimiento.php?v=listar_pacientes">Seguimiento</a></li>
					<li class="breadcrumb-item active" aria-current="page">Crear Seguimiento</li>
				</ol>
			</nav>
        </div> 
      </div>
	<div class="container">
          	<div class="row">
          		<div class="col-sm-2">
          			 
          		</div>
          		<div class="col-sm-8">
				  <form action="seguimiento.php?v=insert"method="post">
	          		<h1>Ingrese su Informacion</h1>
					  <div class="form-group">
					    <label for="idtarea"># Tarea</label>
					    <input type="text" class="form-control" id="idtarea" name="idtarea" placeholder="Ingrese # Tarea">
					  </div>
					  
					  <div class="form-group">
					    <label for="idparticipante"># Acompañante o Medico</label>
					    <input type="text" class="form-control" id="idparticipante" name="idparticipante"  placeholder="Ingrese #">
					  </div>

					  <div class="form-group">
					    <label for="idpaciente"># Paciente</label>
					    <input type="text" class="form-control" id="idpaciente" name="idpaciente"  placeholder="Ingrese #">
					  </div>

					  <div class="form-group">
					    <label for="post">Primer Post</label>
  						<textarea class="form-control rounded-0" id="post" name="post"  rows="3"></textarea>
					  </div>
					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div> 
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>