
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
        

      <?php 
      @$view=$_GET["v"];

      switch ($view) {

      	case 'listar_pacientes':
      		# code...
			include("config/db.php");

			$consulta = "SELECT * FROM par_participantes";
			$tabla="";

			if ($resultado = $mysqli->query($consulta)) {

			    while ($fila = $resultado->fetch_row()) {
			    	$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td><a class='btn btn-info' href='pacientes.php?v=editar' role='button'><i class='bi bi-save'></i></a> | <a class='btn btn-primary' href='pacientes.php?v=ver&id=' role='button'><i class='bi bi-eye'></i></a></td></tr>";
			    }
				
			    $resultado->close();
			}
			//echo $tabla; exit;
      		include("Vistas/ayudantes/listar_pacientes.php"); 
      		break;

      	case 'crear':
      		# code...
      		include("Vistas/ayudantes/crear_paciente.php"); 
      		break;
		
		case 'insert':
				# code...

				include("config/db.php");


				$cedula=$_POST['inputcedula'];
				
				$nombre=$_POST['inputnombre'];
				$apellido=$_POST['inputapellido'];
				$nickname=$_POST['inputnick'];
				$tipo_ayudante=$_POST['input_tipo'];
				$correo_email=$_POST['inputemail'];
				$password=$_POST['inputpass'];

				$consulta = "INSERT INTO par_participantes (cedula,  nombre, apellido, nickname, tipo_participante)
				VALUES (".$cedula.",'".$nombre."','".$apellido."','".$nickname."',".$tipo_ayudante.")";

				//echo $consulta; die();
				
				$sentencia = $mysqli->prepare($consulta);

				$sentencia->execute();

				//insertar login

				$consulta2 = "INSERT INTO login (nombre, email, password, cedula)
				VALUES ('".$nombre."','".$correo_email."','".$password."',".$cedula." )";
				
				$sentencia2 = $mysqli->prepare($consulta2);

				$sentencia2->execute();

				//
				$sentencia->close();

				$sentencia2->close();

				header("Location: dashboard.php");

				echo "se guardo registro";

			break;

      	case 'editar':
      		# code...
      		include("Vistas/pacientes/update_paciente.php"); 
      		break;

      	default:
      		# code...
      		include("Vistas/error/error404.php"); 
      		break;
      }

       ?>

     
    </main>
  </div>
</div>
<?php include("plantilla/footer.php"); ?>