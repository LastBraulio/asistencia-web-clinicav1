<h1 class="h2">Crear Ayudante</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          	<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="ayudantes.php?v=listar_pacientes">Ayudantes</a></li>
					<li class="breadcrumb-item active" aria-current="page">Crear Ayudante</li>
				</ol>
			</nav>
        </div>
      </div>
	<div class="container">
          	<div class="row">
          		<div class="col-sm-2">
          			
          		</div>
          		<div class="col-sm-8">
	          		<form action="ayudantes.php?v=insert" method="post">
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
					    <label for="inputnick">NickName</label>
					    <input type="text" class="form-control" id="inputnick" name="inputnick" >
					  </div>
					  <div class="form-group">
					    <label for="input_tipo">Tipo Ayudante</label>
					    <select class="form-control" id="input_tipo" name="input_tipo">
					      <option value="1">DOCTOR</option>
						  <option value="2">AYUDANTE</option>
					    </select>
					  </div>
						
					  <div class="form-group">
					    <label for="inputemail">Correo Email</label>
					    <input type="email" class="form-control" id="inputemail" name="inputemail"  placeholder="Ingrese su Correo">
					  </div>
					  <div class="form-group">
					    <label for="inputpass">PASSWORD</label>
					    <input type="password" class="form-control" id="inputpass" name="inputpass"  placeholder="Ingrese su password">
					  </div>

					  <button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
					</form>
					<br><br>
				</div>
          		<div class="col-sm-2"></div>
          	</div>
          	
          </div>