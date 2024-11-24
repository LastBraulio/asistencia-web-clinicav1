
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
			include("config/db.php");

			$consulta = "SELECT * FROM notificaciones";
			$tabla="";

			if ($resultado = $mysqli->query($consulta)) {

			    while ($fila = $resultado->fetch_row()) {
			    	$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td><a class='btn btn-info' href='pacientes.php?v=editar' role='button'><i class='bi bi-save'></i></a> | <a class='btn btn-danger' href='pacientes.php?v=eliminar&id=' role='button'><i class='bi bi-eraser'></i></a> | <a class='btn btn-primary' href='pacientes.php?v=ver&id=' role='button'><i class='bi bi-eye'></i></a></td></tr>";
			    }
				
			    $resultado->close();
			}
			//echo $tabla; exit;
      		# code...
      		include("Vistas/notificaciones/listar_pacientes.php"); 
      		break;

      	case 'crear_notify':
      		# code...
		  	include("config/db.php");
			$option=$_GET['opcion'];
			//echo $option;exit;
			if($option==1){
				$consulta = "SELECT * FROM notificaciones";
				$tabla="";

				if ($resultado = $mysqli->query($consulta)) {

					while ($fila = $resultado->fetch_row()) {
						$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td class='text_center'><a class='btn btn-info' href='notificaciones.php?v=crear_notify&opcion=2&id_tarea=".$fila[0]."' role='button'><i class='bi bi-save'></i>  Elegir</a> </td></tr>";
					}
					
					$resultado->close();
				}
				include("Vistas/notificaciones/listar_tareas_1.php");
			}else if($option==2){
				include("Vistas/notificaciones/crear_paciente.php");
			}else{
				include("Vistas/notificaciones/update_paciente.php"); 
			}
      		 
      		break;
		
		case 'insert':
				# code...

			include("config/db.php");


			$id_tarea=$_POST['id_tarea'];
			$nombre=$_POST['input_nombre'];
			$fecha_programada=$_POST['inputfecha'];
			$hora_programada=$_POST['input_hora'];

			//exit;

				//$consulta = "INSERT INTO paciente (cedula, fecha_de_nacimiento, nombre, apellido, edad, telefono_celular, correo_email, enfermedad_cronica,otras_enfermedades, fecha)
				//VALUES (?,?,?,?,?,?,?,?,?,?)";
			$consulta = "INSERT INTO notificaciones (idtarea, nombre, fechainiciodesistema, hora_relog)
			VALUES ('".$id_tarea."','".$nombre."','".$fecha_programada."','".$hora_programada."')";
				
			$sentencia = $mysqli->prepare($consulta);

				//$sentencia->bind_param("sss", $cedula, $fecha_de_nacimiento, $nombre,$apellido,$edad,$telefono_celular,$correo_email,$enfermedad_cronica,$otras_enfermedades,$fecha);

			$sentencia->execute();

			$sentencia->close();

			header("Location: notificaciones.php?v=listar_pacientes");

			echo "se guardo registro";

			break;

      	case 'editar':
      		# code...
      		include("Vistas/notificaciones/update_paciente.php"); 
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