<h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
       
          <a class="btn btn-sm btn-outline-secondary dropdown-toggle" href="seguimiento.php?v=ver&id=<?php echo $tarea; ?>&seg=<?php echo $seg;?>" role="button">Recargar Post</a>

        </div>
      </div>
<div class="container-fluid">
          	<div class="row">
				

          		<div class="col-sm-12 ">
	          	
                    <div class="card mb-3">
                        <img src="https://d51h1y0hva8v.cloudfront.net/images/default-source/resize/clinicaalemana_articulo_seguimiento_domiciliario_de_pacientes_covid-19-_clave-_para_detectar_posibles_complicaciones.tmb-casdesktop.jpg?sfvrsn=c7b4f0fd_1" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Seguimiento ID <?php echo $seg;?></h5> 
                            
                            <p class="card-text"><small class="text-muted">Tarea: <?php echo $tarea; ?></small>: <?php echo $descrip; ?></p>
                            <p class="card-text"><small >Observacion: <?php echo $observacion; ?></small></p>
                        </div>
                      </div>
					<br><br>
				</div>
          	</div>
            <?php echo $tabla; ?>
            <div class="row">
                <div class="col-sm-12 card mb-3">
                    <form class="no-gutters" action="seguimiento.php?v=postear" method="post">

                      <input type="hidden" name="id_tarea" value="<?php echo $tarea; ?>">
                      <input type="hidden" name="id_seguimiento" value="<?php echo $seg; ?>">
                      <input type="hidden" name="id_participante" value="<?php echo $_SESSION['id']; ?>">
                    
                      <div class="form-group">
                        <h5 for="get_post"><?php echo $_SESSION['nickname']; ?>  <span class='badge badge-primary'>- Comment <span class='badge badge-light'>*</span></span></h5>
                      
                        <textarea class="form-control form-control-lg" id="get_post" name="get_post" rows="3"></textarea>
                      </div>
                      <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" id="postear" name="postear" value="Guardar Post" >
                      </div>
                    </form>
                </div>
            </div>
            
          	
          </div>