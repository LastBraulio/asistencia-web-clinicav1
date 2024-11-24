<h1 class="h2">Asignar Participante</h1>
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
				  <form action="seguimiento.php?v=asignar_participante"method="post">
	          		<h1>Ingrese su Informacion</h1>
					  <div class="form-group">
					    <label for="id_seguimiento"># Seguimiento</label>
					    <input type="text" class="form-control" id="id_seguimiento" name="id_seguimiento" value="<?php echo $_GET['id']?>" >
					  </div>
					  
					  <div class="form-group">
					    <label for="idparticipante"># Acompañante o Medico</label>
					    <input type="text" class="form-control" id="idparticipante" name="idparticipante"  value="<?php echo $_SESSION['id']?>">
					  </div>

					  <div class="form-group">
					    <label for="idpaciente"># Paciente</label>
					    <input type="text" class="form-control" id="idpaciente" name="idpaciente"  value="<?php echo $_GET['idpaciente'];?>">
					  </div>
					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div> 
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>