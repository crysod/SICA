<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inictial-scale=1.0">
    <title>Sica | Iniciar secion</title>
    <link href="../assets/dist/css/login.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--FONTS -->
    <link href="http://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container rounded shadow">
        <div class="row align-items-stretch">
            <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">
                <div class="fondo">
                    <img src="../assets/dist/img/caminos.jpg" alt="">
                    <img class="logo" src="../assets/dist/img/Logo.png" alt="">
                    <h1 class="text">SICA</h1>
                </div>
            </div>
            <div class="col p-2 rounded-end">
                <div class="text-center">
                    <img src="../assets/dist/img/Logo-sena.png" width="100" alt="logo del sena">
                </div>
                <h2 class="text-center py-4" >BIENVENIDO</h2>
                <!-- LOGIN -->
                <form action="verify.php" method="post">
                    <div class="mb-2">
                        <label for="email" class="form-label"></label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="ingrese Email" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"></label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese Contraseña" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn">Iniciar Sesión</button>
                    </div>
                    <div class="my-3">
                        <span>No tienes cuenta?<a href="register.php"> Regístrate</a></span><br>
                        <span><a href="#">Recuperar contraseña</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>