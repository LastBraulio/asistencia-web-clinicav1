<h1 class="h2">Listar Ayudantes</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
       
          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="ayudantes.php?v=crear" role="button">Nuevo Ayudante</a>

        </div>
      </div>
<div class="container-fluid">
          	<div class="row">

          		<div class="col-sm-12 table-responsive">
	          		<table id="myTable" class="table table-hover ">
					  <thead class="bg-warning">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Cedula</th>
					      <th scope="col">Nombre</th>
					      <th scope="col">Apellido</th>
					      <th scope="col">NickName</th>
					      <th scope="col">Tipo Ayudante</th>
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