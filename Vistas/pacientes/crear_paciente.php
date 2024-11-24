<h1 class="h2">Crear Paciente</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="pacientes.php?v=listar_pacientes">Paciente</a></li>
					<li class="breadcrumb-item active" aria-current="page">Crear Paciente</li>
				</ol>
			</nav>
        </div>
      </div>
	<div class="container">
          	<div class="row">
          		<div class="col-sm-2">
          			
          		</div>
          		<div class="col-sm-8">
	          		<form action="pacientes.php?v=insert" method="post">
	          		<h1>Ingrese su Informacion</h1>
					  <div class="form-group">
					    <label for="inputcedula">Cedula</label>
					    <input type="text" class="form-control" id="inputcedula" name="inputcedula"  placeholder="Ingrese Cedula">
					  </div>
					  <div class="form-group">
					    <label for="inputnombre">Nombre</label>
					    <input type="text" class="form-control" id="inputnombre" name="inputnombre"  placeholder="Ingrese Nombre">
					  </div>
					  <div class="form-group">
					    <label for="inputapellido">Apellido</label>
					    <input type="text" class="form-control" id="inputapellido" name="inputapellido"  placeholder="Ingrese Apellido">
					  </div>
					  
					  <div class="form-group">
					    <label for="inputfechanac">Fecha de Nac</label>
					    <input type="date" class="form-control" id="inputfechanac" name="inputfechanac" >
					  </div>
					  <div class="form-group">
					    <label for="inputedad">Edad</label>
					    <input type="text" class="form-control" id="inputedad" name="inputedad"  placeholder="Ingrese su Edad">
					  </div>
					   <div class="form-group">
					    <label for="inputcelular">Telefono Celular</label>
					    <input type="text" class="form-control" id="inputcelular" name="inputcelular"  placeholder="Ingrese su Celular">
					  </div>
					  <div class="form-group">
					    <label for="inputemail">Correo Email</label>
					    <input type="email" class="form-control" id="inputemail" name="inputemail"  placeholder="Ingrese su Correo">
					  </div>
					  <div class="form-group">
					    <label for="input_usuario">Enfermedad Cronica</label>
					    <select class="form-control" id="input_usuario" name="inputenfermedad">
					      <option>HIPERTROFIA DE PRÓSTATA</option>
					      <option>HIPERTENSIÓN ARTERIAL</option>
					      <option>GRIPE</option>
					      <option>DIABETES</option>
					      <option>ALZHEIMER O DEMENCIA SENIL</option>
					      <option>PROBLEMAS AUDITIVOS Y VISUALES</option>
					      <option>ARTRITIS Y ARTROSIS</option>
					      <option>PARKINSON</option>
					      <option>DESNUTRICIÓN</option>
					      <option>OSTEOPOROSIS</option>
					      <option>ACCIDENTE CEREBRO VASCULAR (ICTUS)</option>
					      <option>INFARTO</option>
					      <option>ENFERMEDADES CORONARIA</option>
					      <option>COLESTEROL ALTO</option>
					      <option>ENFERMEDADES MENTALES</option>
					      <option>TRANSTORNO DEL SUEÑO</option>
					      <option>FATIGA CRONICA</option>
					      <option>SOLEDAD Y DEPRESION</option>
					      <option>OTRAS ENFERMEDADES</option>
					    </select>
					  </div>
					  <div class="form-group">
					    <label for="inputobservar">Otras Enfermedades</label>
  						<textarea class="form-control rounded-0" id="inputobservar" name="inputobservar" rows="3"></textarea>
					  </div>
					  <div class="form-group">
					    <label for="inputfecha">Fecha</label>
					    <input type="date" class="form-control" id="inputfecha" name="inputfecha">
					  </div>
					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div>
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>