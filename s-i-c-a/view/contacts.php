<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inictial-scale=1.0">
    <title> Sica | Contactos</title>
    <link rel="shortcut icon" href="assets/dist/img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/dist/css/contacts.css"></head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONTS -->
    <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
<body>
    <header class="fixed-top">
        <nav>
            <ul class="main-nav">
                <li class="main-nav_item">
                    <a class="navbar-brand" href="../index.php">
                        <img class="d-inline-block" src="assets/dist/img/Logo.png" alt="Avatar Logo">
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
                        <button class="btn1" type="button"><a href="auth/register.php">Registrar</a></button>
                        <button class="btn2" type="submit">Iniciar</button>
                    </form>
                </div>
            </ul>
        </nav>
    </header>
    <main class="rounded shadow">
        <section class="conte">
            <form  class="row g-2">
                <h1>Formulario de contacto</h1>
                <div class="col-md-6">
                    <label for="" class="form-label"></label>
                    <input type="email" class="form-control" id="" placeholder="Ingrese su nombre">
                </div>
                <div class="col-md-6">
                    <label for="" class="form-label"></label>
                    <input type="email" class="form-control" id="" placeholder="Ingrese su apellido">
                </div>
                <div class="mb-0">
                    <label for="" class="form-label"></label>
                    <input type="email" class="form-control" id="" placeholder="Ingrese Email">

                </div>
                <div class="mb-0">
                    <label for="" class="form-label"></label>
                    <input type="number" class="form-control" id="" placeholder="Ingrese N° de telefono">

                </div>
                <div class="mb-2">
                    <label for="" class="form-label">Comentario</label>
                    <textarea class="form-control" id="" rows="3"></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button>
            </form>
        </section>
    </main>
    <footer class="footer fixed-bottom">
        <p>Copyright &copy; 2020-2022 <span>Cristian F. Ortega Diaz</span>, todos los derechos reservados.</p>
    </footer>
</body>
</html>