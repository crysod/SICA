<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Reportes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Reporte</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered table-hover" id="tablaarticulos">
                        <thead> <!-- CABECERA -->
                        <tr> <!-- FILA -->
                            <!-- CAMPOS -->
                            <td>Area</td>
                            <td>Tarea</td>
                            <td>Borrar</td>
                            <!-- /FIN CAMPOS-->
                        </tr><!-- /FIN FILA-->
                        </thead> <!-- /FIN CABECERA -->
                    </table>
        </div><!-- /FIN CONTAINER -->
    </div><!-- /.container-fluid -->
</div><!-- /.content -->
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
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
<!-- jQuery -->
<!--<script src="vistas/assets/plugins/jquery/jquery.min.js"></script>-->
<!-- AdminLTE App -->
<script src="view/assets/dist/js/adminlte.min.js"></script>
<!-- SCRITP PROPIO -->
<script src="view/assets/dist/js/scritp.js"></script>
<script>
    $(document).ready(function (){
        let tabla = $("#tablaarticulos").DataTable({
            "ajax": {
                url: "dataReporte.php?accion=listar",
                dataSrc: ""
            },
            "columns": [
                {"data": "nombre"},
                {"data": "medida"},
                {"data": null, "orderable": false}
            ],
            "columnDefs": [{
                targets: 2,
                "defaultContent": "<button class='btn btn-sm btn-danger botonborrar'><i class='fa-solid fa-trash-can'></i></button>",
                data: null
            }],
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-CO.json",
            },
        });

        //EVENTOS DE LOS BOTONES
        $('#BotonAgregar').click(function() { //EVENTO DEL BOTON AGREGAR
            $('#ConfirmarAgregar').show(); //MUESTRE EL BOTON AGREGAR DEL MODAL
            $('#ConfirmarModificar').hide(); //OCULTA EL BOTON MODIFICAR DEL MODAL
            limpiarFormulario(); //EJECULA LA FUNCION QUE LIMPIA LOS CAMPOS DEL FORMULARIO
            $("#FormularioUsuario").modal('show'); //MUESTRE EL MODAL
        });

        $('#ConfirmarAgregar').click(function() { //EVENTO DEL BOTON AGREGAR DEL MODAL
            $("#FormularioUsuario").modal('hide'); //OCULTA EL MODAL
            let registro = recuperarDatosFormulario(); // A LA VARIABLE REGISTRO LE ASIGNA LOS DATOS RECUPERADOS POR LA FUNCION recuperarDatosFormulario()
            agregarRegistro(registro); //EJECUTA LA FUNCION agregarRegistro(registro) QUE RECIBE POR PARAMETRO LA VARIABLE REGISTRO
        });

        $('#ConfirmarModificar').click(function() { //EVENTO DEL BOTON MODIFICAR DEL MODAL
            $("#FormularioUsuario").modal('hide'); // OCULTA EL MODAL
            let registro = recuperarDatosFormulario(); // A LA VARIABLE REGISTRO LE ASIGNA LOS DATOS RECUPERADOS POR LA FUNCION recuperarDatosFormulario()
            modificarRegistro(registro); //EJECUTA LA FUNCION modificarRegistro(registro) QUE RECIBE POR PARAMETRO LA VARIABLE REGISTRO
        });

        $('#tablaarticulos tbody').on('click', 'button.botonmodificar', function() {
            $('#ConfirmarAgregar').hide();
            $('#ConfirmarModificar').show();
            let registro = tabla.row($(this).parents('tr')).data();
            recuperarRegistro(registro.id);
        });

        $('#tablaarticulos tbody').on('click', 'button.botonborrar', function() {
            if (confirm("¿Realmente quiere borrar el artículo?")) {
                let registro = tabla.row($(this).parents('tr')).data();
                borrarRegistro(registro.id);
            }
        });

        // funciones para comunicarse con el servidor via ajax

        function borrarRegistro(id) {
            $.ajax({
                type: 'GET',
                url: 'dataTareaArea.php?accion=borrar&codigo=' + id,
                data: '',
                success: function(msg) {
                    tabla.ajax.reload();
                },
                error: function() {
                    alert("Hay un problema para borrar el registro.");
                }
            });
        }
    });
</script>