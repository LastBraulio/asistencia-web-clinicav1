
  <?php session_start();
		if (isset($_SESSION['ID_SESSION'])) {
		# code...
		$menus=$_SESSION['tipo_par'];
		}else{
		//echo $_SESSION['ID_SESSION']; die();
		header("Location: index.php");
		die();
		}

    if ($menus==1) {
      $color_menu="bg-success";
    }else{
      $color_menu="bg-info";
    }
	?>

  	<?php 
	  include("plantilla/header.php");
  
  	include("config/menu.php"); 
  	?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
          </div>
          
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="card bg-dark text-white">
            <img src="https://vidaabuelo.com/wp-content/uploads/2016/11/trauma-ad-mayor2.jpg" height="500" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h2 class="card-title">Bienvenido  <?php echo $_SESSION['nombre'] ?> - <?php echo $_SESSION['nickname'];?></h2>
              <p class="card-text">SCAM v1.0 es un Sistema de Control del Adulto Mayor que facilita el correcto control de  </p>
              <p class="card-text">suministracion de inyectables, medicamentos, dietas para garantizar una Saludo Plena  </p>
              <p class="card-text">id: <?php echo session_id();?> </p>
            </div>
          </div>
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-sm-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Pacientes </div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Pacientes : 20 </h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-white bg-success  mb-3" style="max-width: 18rem;">
            <div class="card-header">Tareas</div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Tareas: 100</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Notificaciones</div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Notificaciones: 200</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card text-white bg-success  mb-3" style="max-width: 18rem;">
            <div class="card-header">Ayudantes</div>
            <div class="card-body">
              <h5 class="card-title">Cantidad de Ayudantes: 20</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>

      <?php 
     /* @$view=$_GET["v"];

      switch ($view) {
      	case 'crear_paciente':
      		# code...
      		include("Vistas/crear_paciente.php"); 
      		break;
      	
      	default:
      		# code...
      		break;
      }*/

       ?>

     
    </main>
  </div>
</div>
<?php include("plantilla/footer.php"); ?>