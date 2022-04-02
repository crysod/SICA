<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inictial-scale=1.0">
    <title>Sica</title>
    <link rel="shortcut icon" href="view/assets/dist/img/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="view/assets/dist/css/index.css"></head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- FONTS -->
    <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
<body>
    <header>
        <nav>
            <ul class="main-nav">
                <li class="main-nav_item">
                    <a class="navbar-brand" href="index.php">
                        <img class="d-inline-block" src="view/assets/dist/img/Logo.png" alt="Avatar Logo">
                        <span>
                            S I C A
                        </span>
                    </a>
                </li>
                <li class="main-nav_item"><a href="index.php">Inicio</a></li>
                <li class="main-nav_item"><a href="view/register.php">Registros</a></li>
                <li class="main-nav_item"><a href="view/contacts.php">Contactos</a></li>
                <div class="login-container">
                    <form action="view/auth/verify.php" method="post">
                        <label for="email">
                            <input type="text" placeholder="Email" name="email" required>
                        </label>
                        <label for="password">
                            <input type="password" placeholder="Contraseña" name="password" required>
                        </label>
                        <button class="btn1" type="button"><a href="view/auth/register.php">Registrar</a></button>
                        <button class="btn2" type="submit">Iniciar</button>
                    </form>
                </div>
            </ul>
        </nav>
    </header>
    <div id="content"></div>
    <main>
        <section>
            <article class="text">
                <h1>SICA</h1>
                <p>Software para el calculo de costos de producción de cultivos agrícolas desarrollado en el Centro Biotecnológico del Caribe</p>
            </article>
            <button type="button" class="btn"><a href="view/register.php">Nuevo Registro</a></button>
        </section>
        <img src="view/assets/dist/img/Logo-sena.png" alt="Logo del sena.">
    </main>
    <footer class="footer fixed-bottom">
        <p>Copyright &copy; 2020-2022 <span>Cristian F. Ortega Diaz</span>, todos los derechos reservados.</p>
    </footer>
</body>
</html>