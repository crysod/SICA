<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
        <img src="view/assets/dist/img/Logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin SICA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link active" onclick="uploadContent('view/dashboard.php','content-wrapper')">
                        <i class="nav-icon fas fa-house"></i>
                        <p>Inicio</p>
                    </a>
                </li>
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/actividades.php','content_wrapper')">
                        <i class="nav-icon fa-solid fa-list-alt"></i>
                        <p>Datos de las faces<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/cultivos.php','content-wrapper')">
                                <i class="fa-solid fa-mound nav-icon"></i>
                                <p>cultivo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/areacultivo.php','content-wrapper')">
                                <i class="fa-solid fa-square nav-icon"></i>
                                <p>Area del cultivo</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/siembra.php','content-wrapper')">
                                <i class="fa-solid fa-wheat-awn nav-icon"></i>
                                <p>Siembra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/labores.php','content-wrapper')">
                                <i class="fa-solid fa-person-digging nav-icon"></i>
                                <p>Labores culturales</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/cosecha.php','content-wrapper')">
                                <i class="fa-solid fa-truck-loading nav-icon"></i>
                                <p>Cosechas</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/actividades.php','content_wrapper')">
                        <i class="nav-icon fa-solid fa-file-import"></i>
                        <p>Asignar tareas<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/tareaArea.php','content-wrapper')">
                                <i class="fa-solid fa-square nav-icon"></i>
                                <p>Área</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/tareaSiembra.php','content-wrapper')">
                                <i class="fa-solid fa-wheat-awn nav-icon"></i>
                                <p>Siembra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/tareaLabor.php','content-wrapper')">
                                <i class="fa-solid fa-person-digging nav-icon"></i>
                                <p>Labores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/tareaCosecha.php','content-wrapper')">
                                <i class="fa-solid fa-truck-loading nav-icon"></i>
                                <p>Cosecha</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/actividades.php','content_wrapper')">
                        <i class="nav-icon fa-solid fa-file-import"></i>
                        <p>Asignar costos<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/tareaArea.php','content-wrapper')">
                                <i class="fa-solid fa-square nav-icon"></i>
                                <p>Actividades de área</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/areacultivo.php','content-wrapper')">
                                <i class="fa-solid fa-wheat-awn nav-icon"></i>
                                <p>Tareas de Siembra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/siembra.php','content-wrapper')">
                                <i class="fa-solid fa-person-digging nav-icon"></i>
                                <p>Actividades de labores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/labores.php','content-wrapper')">
                                <i class="fa-solid fa-truck-loading nav-icon"></i>
                                <p>Tareas de cosecha</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/labores.php','content-wrapper')">
                                <i class="fa-solid fa-truck-loading nav-icon"></i>
                                <p>Tareas - Productos</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/tareas.php','content-wrapper')">
                        <i class="fa-solid fa-list-check"></i>
                        <p>Tareas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/productos.php','content-wrapper')">
                        <i class="fa-solid fa-list-check"></i>
                        <p>Productos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/reportes.php','content-wrapper')">
                        <i class="fa-solid fa-file"></i>
                        <p>Reporte</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="uploadContent('view/configuraciones.php','content-wrapper')">
                        <i class="fa-solid fa-gear"></i>
                        <p>Configuración</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<script>
    $(".nav-link").on('click',function (){
        $(".nav-link").removeClass('active');
        $(this).addClass('active');
    })
</script>