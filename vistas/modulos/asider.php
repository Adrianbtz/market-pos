
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="vistas/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AuditTech VLH</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item">
            <a style="cursor: pointer" class="nav-link active" onclick="CargarContenido('vistas/proyecto.php', 'content-wrapper')">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Proyectos
              </p>
            </a>
          </li>

          <li class="nav-item">
          <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/Dashboard.php', 'content-wrapper')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/Dashboard1.php', 'content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 1</p>
                </a>
              </li>
              <li class="nav-item">
              <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/Dashboard2.php', 'content-wrapper')">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 2</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
          <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/crm.php', 'content-wrapper')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                CRM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/tarea.php', 'content-wrapper')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tareas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarea 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tarea 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/tiempo.php', 'content-wrapper')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Informe de Tiempo
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a style="cursor: pointer" class="nav-link" onclick="CargarContenido('vistas/plan.php', 'content-wrapper')">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Mi Plan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard 2</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <script>
    $(".nav-link").on("click", function(){
      $(".nav-link").removeClass("active");
      $(this).addClass("active");
    })
  </script>
