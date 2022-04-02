<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sica | Registrar</title>
    <link rel="shortcut icon" href="assets/dist/img/Logo.png" type="image/x-icon">
    <!--<link rel="stylesheet" href="assets/dist/css/adminlte.css">-->
    <link rel="stylesheet" href="assets/dist/css/register.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- FONTS -->
    <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <!--<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">-->
</head>
    <body>
    <header>
        <nav>
            <ul class="main-nav">
                <li class="main-nav_item">
                    <a class="navbar-brand" href="../index.php">
                        <img class="rounded-pill" src="assets/dist/img/Logo.png" alt="Avatar Logo">
                        <span>
                            S I C A
                        </span>
                    </a>
                </li>
                <li class="main-nav_item"><a href="../index.php">Inicio</a></li>
                <li class="main-nav_item"><a href="register.php">Registros</a></li>
                <li class="main-nav_item"><a href="contacts.php">Contactos</a></li>
                <div class="login-container">
                    <form action="auth/verify.php" method="post">
                        <label for="email">
                            <input type="text" placeholder="Email" name="email" required>
                        </label>
                        <label for="password">
                            <input type="password" placeholder="Contraseña" name="password" required>
                        </label>
                        <button type="button"><a href="auth/register.php">Registrar</a></button>
                        <button type="submit">Iniciar</button>
                    </form>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <div class="content">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-hover-" id="tablaarticulos">
                                <thead> <!-- CABECERA -->
                                <tr> <!-- FILA -->
                                    <!-- CAMPOS -->
                                    <td>N°</td>
                                    <td>Nombre</td>
                                    <td>Medida</td>
                                    <td>Cantidad</td>
                                    <td>Ubicacion</td>
                                    <td>Cultivos_id</td>
                                    <!-- /FIN CAMPOS-->
                                </tr><!-- /FIN FILA-->
                                </thead> <!-- /FIN CABECERA -->
                            </table>
                        </div><!-- /FIN COL -->
                    </div><!-- / FIN ROW -->
                </div><!-- /FIN CONTAINER -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content -->
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="assets/dist/js/adminlte.min.js"></script>
    <script src="assets/dist/js/reporteRegistros.js"></script>
</body>
</html>