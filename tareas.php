
  	<?php session_start();
		if (isset($_SESSION['ID_SESSION'])) {
		# code...
		$menus=$_SESSION['tipo_par'];
		}else{
		//echo $_SESSION['ID_SESSION']; die();
		header("Location: index.php");
		die();
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

			  $consulta = "SELECT * FROM tarea";
			  $tabla="";
  
			  if ($resultado = $mysqli->query($consulta)) {
  
				  while ($fila = $resultado->fetch_row()) {
					  $tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td>".$fila[4]."</td><td>".$fila[5]."</td><td><a class='btn btn-info' href='pacientes.php?v=editar' role='button'><i class='bi bi-save'></i></a> | <a class='btn btn-danger' href='pacientes.php?v=eliminar&id=' role='button'><i class='bi bi-eraser'></i></a> | <a class='btn btn-primary' href='pacientes.php?v=ver&id=' role='button'><i class='bi bi-eye'></i></a></td></tr>";
				  }
				  
				  $resultado->close();
			  }
      		include("Vistas/tareas/listar.php"); 
      		break;

      	case 'crear_paciente':
      		# code...
      		include("Vistas/tareas/crear.php"); 
      		break;

		case 'insert':
				# code...

				include("config/db.php");
 

				$idpaciente=$_POST['inputidpaciente'];
				$observacion=$_POST['inputobservar'];
				$tarea=$_POST['inputtarea'];
				$f_inicio=$_POST['inputfechainicio'];
				$f_final=$_POST['inputfechafinal'];

				//$consulta = "INSERT INTO paciente (cedula, fecha_de_nacimiento, nombre, apellido, edad, telefono_celular, correo_email, enfermedad_cronica,otras_enfermedades, fecha)
				//VALUES (?,?,?,?,?,?,?,?,?,?)";
				$consulta = "INSERT INTO tarea (idpaciente, observacion, tarea, fechainicio, fechafinal, fechadesistema)
				VALUES ('".$idpaciente."','".$observacion."','".$tarea."','".$f_inicio."',".$f_final.", CURDATE())";
				
				$sentencia = $mysqli->prepare($consulta);

				//$sentencia->bind_param("sss", $cedula, $fecha_de_nacimiento, $nombre,$apellido,$edad,$telefono_celular,$correo_email,$enfermedad_cronica,$otras_enfermedades,$fecha);

				$sentencia->execute();

				$sentencia->close();

				header("Location: tareas.php?v=listar_pacientes");

				echo "se guardo registro";

			break;

      	case 'editar':
      		# code...
      		include("Vistas/tareas/update.php"); 
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