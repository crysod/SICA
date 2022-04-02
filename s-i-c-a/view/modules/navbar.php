<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/dashboard.php','content-wrapper')">Tablero</a>
        </li>
        <div class="dropdown">
            <button class="dropbtn">Actividades
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/cultivos.php','content-wrapper')">cultivo</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/areacultivo.php','content-wrapper')"> area del cultivo</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/siembra.php','content-wrapper')">Siembra</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/labores.php','content-wrapper')">Labores</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/cosecha.php','content-wrapper')">Cosecha</a>
                </li>
            </div>
        </div>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/reportes.php','content-wrapper')">Reportes</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a style="cursor: pointer" class="nav-link" onclick="uploadContent('view/configuraciones.php','content-wrapper')">Configuraciones</a>
            <!--<i style="cursor: pointer" class="nav-link fa-solid fa-gear" onclick="uploadContent('view/configuraciones.php','content-wrapper')"></i>-->
        </li>
    </ul>
</nav>
<!-- /.navbar -->