<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/dist/css/registerUser.css">
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
                    <img src="../assets/dist/img/pexels-tomas-anunziata-3876417.jpg" alt="">
                    <img class="logo" src="../assets/dist/img/Logo.png" alt="">
                    <h1 class="text">SICA</h1>
                </div>
            </div>
            <div class="col p-2 rounded-end">
                <!--<div class="text-center">
                    <img src="../assets/dist/img/Logo-sena.png" width="100" alt="logo del sena">
                </div>-->
                <h2 class="text-center py-0" >Registre sus datos</h2>
                <!-- REGISTRO -->
                <form action="dataAddUser.php" method="POST">
                    <input type="hidden" id="Codigo"><!-- CAMPO OCULTO -->
                    <div class="mb-0">
                        <label for="identificacion" class="form-label"></label>
                        <input type="number" name="identificacion" id="Identificacion" class="form-control" placeholder="ingrese N° de documento de identicación" required>
                    </div>
                    <div class="mb-0">
                        <label for="nombre" class="form-label"></label>
                        <input type="text" name="nombre" id="Nombre" class="form-control" placeholder="ingrese su nombre" required>
                    </div>
                    <div class="mb-0">
                        <label for="apellido" class="form-label"></label>
                        <input type="text" name="apellido" id="Apellido" class="form-control" placeholder="ingrese su apellido" required>
                    </div>
                    <div class="mb-0">
                        <label for="email" class="form-label"></label>
                        <input type="email" name="email" id="Email" class="form-control" placeholder="ingrese su Email institucional sena (@misena.edu.co)" required>
                    </div>
                    <div class="mb-0">
                        <label for="pass" class="form-label"></label>
                        <input type="password" name="password" id="Password" class="form-control" placeholder="Ingrese Contraseña" required>
                    </div>
                    <div class="mb-0">
                        <label for="ficha" class="form-label"></label>
                        <input type="number" name="ficha" id="Ficha" class="form-control" placeholder="ingrese el nuemro de ficha del programa" required>
                    </div>
                    <div class="mb-4">
                        <label for="ficha" class="form-label"></label>
                        <input type="number" name="roles_id" id="Roles_id" class="form-control" placeholder="Rol user" value="2" readonly>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn" id="BotonAgregar">Registrar</button>
                    </div>
                    <div class="my-3">
                        <span>Ya tienes una cuenta?<a href="login.php"> Inicia sesion</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>