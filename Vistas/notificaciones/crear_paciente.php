<h1 class="h2">Crear Notificacion</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="notificaciones.php?v=listar_pacientes">Notificaciones</a></li>
					<li class="breadcrumb-item"><a href="notificaciones.php?v=crear_notify&opcion=1">Elegir Tarea</a></li>
					<li class="breadcrumb-item active" aria-current="page">Crear Notificacion</li>
				</ol>
			</nav>
        </div>
      </div>
	<div class="container">
          	<div class="row">
          		<div class="col-sm-2">
          			
          		</div>
          		<div class="col-sm-8">
				  <form action="notificaciones.php?v=insert" method="post">
	          		<h1>Ingrese su Informacion</h1>
					  <div class="form-group">
					    <label for="inputcedula"># Tarea</label>
					    <input type="text" class="form-control" id="inputcedula" aria-describedby="emailHelp" value="<?php echo $_GET['id_tarea'] ?>" disabled>
						<input type="hidden" name="id_tarea" value="<?php echo $_GET['id_tarea'] ?>">
					  </div>
					  
					  <div class="form-group">
					    <label for="input_nombre">Notificacion</label>
					    <textarea class="form-control rounded-0" id="input_nombre" name="input_nombre" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="inputfecha">Fecha Programada</label>
					    <input type="date" class="form-control" id="inputfecha" name="inputfecha" >
					  </div>

					  <div class="form-group">
					    <label for="input_hora">Hora Relog</label>
					    <input type="text" class="form-control" id="input_hora" name="input_hora" aria-describedby="emailHelp" placeholder="Ingrese Hora Exacta">
					  </div>
					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div>
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>