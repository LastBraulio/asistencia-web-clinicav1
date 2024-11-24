<?php 

if($menus==1){//doctor
	echo ' <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
            <i class="bi bi-speedometer2"></i>
              Dashboard Doctor <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tareas.php?v=listar_pacientes">
            <i class="bi bi-book"></i>
              Tarea
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="seguimiento.php?v=listar_pacientes">
            <i class="bi bi-asterisk"></i>
              Seguimiento 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="notificaciones.php?v=listar_pacientes">
            <i class="bi bi-bell"></i>
              Notificaciones
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pacientes.php?v=listar_pacientes">
            <i class="bi bi-person-badge"></i>
              Pacientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ayudantes.php?v=listar_pacientes">
            <i class="bi bi-info-circle"></i>
              Ayudantes
            </a>
          </li>
          
        </ul>
      </div>
    </nav>';
}else{//ayudante o Pacientes
  echo ' <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">
          <i class="bi bi-speedometer2"></i>
            Dashboard Ayudante <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="seguimiento.php?v=listar_pacientes">
          <i class="bi bi-asterisk"></i>
            Seguimiento 
          </a>
        </li>
        
      </ul>
    </div>
  </nav>';
}


 ?>