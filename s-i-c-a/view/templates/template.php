<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sica</title>
    <link rel="shortcut icon" href="view/assets/dist/img/Logo.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- CSS only CDN bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--   FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- DATA TABLE -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="view/assets/dist/css/alt/adminNavbar.css">

    <!-- REQUIRED SCRIPTS -->
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- CDN Bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="vistas/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>-->
    <!-- DATA TABLE JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-CO.json"></script>
    <!-- jQuery -->
    <!--<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>-->
    <!-- AdminLTE App -->
    <script src="view/assets/dist/js/adminlte.min.js"></script>
    <!-- SCRITP PROPIO -->
    <script src="view/assets/dist/js/scritp.js"></script>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php
            include "view/modules/navbar.php";
            include "view/modules/aside.php";
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="content-wrapper">
            <?php
            include "view/dashboard.php";
            ?>
        </div>
        <!-- /.content-wrapper -->
        <?php
            include "view/modules/footer.php";
        ?>
    </div>
</body>
</html>
