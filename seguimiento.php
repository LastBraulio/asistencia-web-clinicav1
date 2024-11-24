
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
			@$participantes="<a class='btn btn-info' title='Agregar otros participantes' href='seguimiento.php?v=participantes&id=@fila&idpaciente=@pacien' role='button'><i class='bi bi-save'></i></a>";
		  }else{
			$color_menu="bg-info";
			@$participantes=" ";
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
			
			$consulta = "SELECT t1.id_seguimiento, t1.id_tarea, t1.fecha, t4.nombre,count(t2.id_participante) AS contar , CONCAT(t5.nombre,' ',t5.apellido) AS nombre_paciente, t5.cedula, t5.idpaciente FROM seguimiento t1, participantes_seg t2, par_participantes t3, tipo_participantes t4, paciente t5 WHERE t1.id_seguimiento=t2.id_seguimiento AND t3.id_participante=t2.id_participante AND t3.tipo_participante= t4.id_tipo_participante AND t2.id_paciente=t5.idpaciente AND t3.id_participante=".$_SESSION['id']." GROUP BY t1.id_tarea";
			$tabla="";
  
			if ($resultado = $mysqli->query($consulta)) {
  
				while ($fila = $resultado->fetch_row()) {
					//$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td><a class='btn btn-info' href='pacientes.php?v=editar' role='button'><i class='bi bi-save'></i></a> | <a class='btn btn-danger' href='pacientes.php?v=eliminar&id=' role='button'><i class='bi bi-eraser'></i></a> | <a class='btn btn-primary' href='pacientes.php?v=ver&id=' role='button'><i class='bi bi-eye'></i></a></td></tr>";
					$tabla.= "<tr><td><div class='card mb-3' style='max-width: 540px;'>
					<div class='row no-gutters'>
					  <div class='col-md-4'>
						<img src='https://funcafate.org/wp-content/uploads/2015/08/evaluacion-seguimiento-control-funcafate-300x196.jpg' alt='...'>
					  </div>
					  <div class='col-md-8'>
						<div class='card-body'>
						  <h5 class='card-title'>Seguimiento N° ".$fila[0]."</h5>
						  <p class='card-text'>Tarea N° ".$fila[1]." Suministrado por ".$fila[3]."</p>
						  <p class='card-text'>Paciente: ".$fila[5]." cedula ".$fila[6]."</p>
						  <p class='card-text'>Cantidad Ayudante ".$fila[4]."</p>
						  <p class='card-text'>Opciones:  ".str_replace("@pacien",$fila[7],str_replace("@fila",$fila[0],$participantes)) ." | <a class='btn btn-danger' title='Cerrar Seguimiento' href='seguimiento.php?v=dar_baja&id=".$fila[0]."' role='button'><i class='bi bi-eraser'></i></a> | <a class='btn btn-primary' title='Dar Seguimiento' href='seguimiento.php?v=ver&id=".$fila[1]."&seg=".$fila[0]."' role='button'><i class='bi bi-eye'></i></a></p>
						  <p class='card-text'><small class='text-muted'>Fecha del seguimiento, ".$fila[2]."</small></p>
						</div>
					  </div>
					</div>
				  </div>
				  </td></tr>";
				}
				  
				$resultado->close();
			}

      		include("Vistas/seguimientos/listar.php"); 
      		break;

      	case 'crear_paciente':
      		# code...
      		include("Vistas/seguimientos/crear.php"); 
      		break;
		
		
		case 'insert':
				# code...

				include("config/db.php");
 

				$idtarea=$_POST['idtarea'];
				$idparticipante=$_POST['idparticipante'];
				$idpaciente=$_POST['idpaciente'];
				
				$post=$_POST['post'];

				//$consulta = "INSERT INTO paciente (cedula, fecha_de_nacimiento, nombre, apellido, edad, telefono_celular, correo_email, enfermedad_cronica,otras_enfermedades, fecha)
				//VALUES (?,?,?,?,?,?,?,?,?,?)";
				$consulta = "INSERT INTO seguimiento (id_tarea, id_participante, post, fecha)
				VALUES ('".$idtarea."','".$idparticipante."','".$post."', CURDATE())";
				
				$sentencia = $mysqli->prepare($consulta);

				//$sentencia->bind_param("sss", $cedula, $fecha_de_nacimiento, $nombre,$apellido,$edad,$telefono_celular,$correo_email,$enfermedad_cronica,$otras_enfermedades,$fecha);

				$sentencia->execute();

				$last_ids=$mysqli->insert_id;

				//$sentencia->close();

				// seguimiento _participante

				$query="INSERT INTO participantes_seg (id_participante, id_seguimiento,id_paciente)
				VALUES (".$idparticipante.",".$last_ids.",".$idpaciente.")";

				$ejecutar=$mysqli->prepare($query);

				$ejecutar->execute();

				$sentencia->close();
				$ejecutar->close();




				header("Location: seguimiento.php?v=listar_pacientes");

				echo "se guardo registro";

			break;

			case 'asignar_participante':
				# code...

				include("config/db.php");
 

				$id_seguimiento=$_POST['id_seguimiento'];
				$idparticipante=$_POST['idparticipante'];
				$idpaciente=$_POST['idpaciente'];

			

				$query="INSERT INTO participantes_seg (id_participante, id_seguimiento,id_paciente)
				VALUES (".$idparticipante.",".$id_seguimiento.",".$idpaciente.")";

				$ejecutar=$mysqli->prepare($query);

				$ejecutar->execute();
				$ejecutar->close();


				header("Location: seguimiento.php?v=listar_pacientes");

				echo "se guardo registro";

			break;

			case 'postear':
				# code...

				include("config/db.php");
				$ids=$_POST['id_seguimiento'];//idseguimiento

				$idtarea=$_POST['id_tarea'];
				$idparticipante=$_POST['id_participante'];
				$idpaciente=$_POST['idpaciente'];
				
				$post=$_POST['get_post'];

				$consulta = "INSERT INTO seguimiento (id_tarea, id_participante, post, fecha)
				VALUES ('".$idtarea."','".$idparticipante."','".$post."', CURDATE())";
				
				$sentencia = $mysqli->prepare($consulta);

				$sentencia->execute();

				$sentencia->close();
				//$ejecutar->close();

				header("Location: seguimiento.php?v=ver&id=".$idtarea."&seg=".$ids."");

			break;

      	case 'editar':
      		# code...
      		include("Vistas/seguimientos/update.php"); 
      		break;

		case 'participantes':
			# code...
			include("Vistas/seguimientos/participante.php"); 
			break;

		case 'ver':
				# code...
				@$id=$_GET['id'];
				@$seg=$_GET['seg'];
				include("config/db.php");

				$consulta = "SELECT t1.id_seguimiento, t1.id_tarea, t1.fecha, t1.post,ta.nickname, if(ta.tipo_participante=1,'DOCTOR','AYUDANTE') AS tipo_participantes, tar.tarea,tar.observacion,ta.tipo_participante
				FROM seguimiento t1, par_participantes ta, tarea tar
				WHERE t1.id_participante= ta.id_participante AND t1.id_tarea=tar.idtarea AND t1.id_tarea=".$id." ";
				$tabla=""; 
	
				if ($resultado = $mysqli->query($consulta)) { 
	
					while ($fila = $resultado->fetch_row()) {
						//$tabla.= "<tr><td>".$fila[0]."</td><td>".$fila[1]."</td><td>".$fila[2]."</td><td>".$fila[3]."</td><td><a class='btn btn-info' href='pacientes.php?v=editar' role='button'><i class='bi bi-save'></i></a> | <a class='btn btn-danger' href='pacientes.php?v=eliminar&id=' role='button'><i class='bi bi-eraser'></i></a> | <a class='btn btn-primary' href='pacientes.php?v=ver&id=' role='button'><i class='bi bi-eye'></i></a></td></tr>";
						if ($fila[8]==1) {
							# code...
							$img_perfil="https://cdn-icons-png.flaticon.com/512/1085/1085413.png";
						} else {
							# code...
							$img_perfil="https://thumbs.dreamstime.com/b/avatar-de-la-enfermera-con-m%C3%A1quina-m%C3%A9dica-del-tablero-y-latido-coraz%C3%B3n-dise%C3%B1o-gr%C3%A1fico-m%C3%A9dico-ejemplo-vector-141305796.jpg";
						}
						$tarea=$fila[1];
						$descrip= $fila[6];
						$observacion=$fila[7];
						$tabla.= "<div class='row'>
						<div class='col-sm-12'>
							<div class='card mb-3' >
								<div class='row no-gutters'>
									<div class='col-md-2'>
										<img src='".$img_perfil."' alt='DOCTOR' width='150px'>
									</div>
									<div class='col-md-8'>
										<div class='card-body'>
										
										<h4 class='card-title'>".$fila[4]." <span class='badge badge-primary'>Tipo: ".$fila[5]."  <span class='badge badge-light'>*</span></span></h4>
										<p class='card-text'>".$fila[3].".</p>
										<p class='card-text'><small class='text-muted'>Last updated ".$fila[2]."</small></p>
									</div>
									
								   
								</div>
								<div class='col-sm-2 text-right float-right'>
										<a class='btn btn-primary btn-sm ' title='#JustLike' href='seguimiento.php?v=dar_baja&id=".$fila[0]."' role='button'><i class='bi bi-emoji-wink'></i></a> <a class='btn btn-outline-primary btn-sm' title='#JustNoise' href='seguimiento.php?v=ver&id=".$fila[0]."' role='button'><i class='bi bi-emoji-neutral'></i></a>
								</div>
							</div>
							<br>
						</div> </div>               
					</div>";
					}
					
					$resultado->close();
				}


				
			include("Vistas/seguimientos/ver_post.php"); 
			break;

      	default:
      		# code...
      		//header("Location: dashboard.php");
        	//die();
			include("Vistas/error/error404.php"); 
      		break;
      }

       ?>

     
    </main>
  </div>
</div>
<?php include("plantilla/footer.php"); ?>