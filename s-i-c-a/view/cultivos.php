<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Area del cultivo</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item active">Area del cultivos</li>
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
                            <td>N°</td>
                            <td>Referencia</td>
                            <td>Nombre</td>
                            <td>Fecha</td>
                            <td>Descripcion</td>
                            <td>Modificar</td>
                            <td>Borrar</td>
                            <!-- /FIN CAMPOS-->
                        </tr><!-- /FIN FILA-->
                        </thead> <!-- /FIN CABECERA -->
                    </table>
                    <button class="btn btn-sm btn-primary" id="BotonAgregar">Agregar cultivo</button>
                </div><!-- /FIN COL -->
            </div><!-- / FIN ROW -->
            <!-- Formulario (Agregar, Modificar) -->
            <div class="modal fade" id="FormularioUsuario" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- MODAL HEADER -->
                        <div class="modal-header">
                            <button type="button" class="close" onclick="$('#FormularioUsuario').modal('hide');" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <!-- MODAL BODY -->
                        <div class="modal-body">
                            <input type="hidden" id="Codigo"><!-- CAMPO OCULTO -->

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <!--<label>Referencia:</label>-->
                                    <input type="text" id="Referencia" class="form-control" placeholder="Ingrese referencia.">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <!--<label>Nombre:</label>-->
                                    <input type="text" id="Nombre" class="form-control" placeholder="Ingrese nombres.">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <!--<label class="label-control col-md-12">Fecha:-->
                                    <input type="text" id="Fecha" class="form-control" placeholder="Ingrese fecha de registro.">
                                    </label>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <!--<label class="label-control col-md-12">Descripcion:-->
                                    <input type="text" id="Descripcion" class="form-control" value=" " placeholder="Ingrese descripción del cultivo.">
                                    </label>
                                </div>
                            </div>

                            <!-- MODAL FOOTER -->
                            <div class="modal-footer">
                                <button type="button" id="ConfirmarAgregar" class="btn btn-success">Agregar</button>
                                <button type="button" id="ConfirmarModificar" class="btn btn-success">Modificar</button>
                                <button type="button" class="btn btn-success" onclick="$('#FormularioUsuario').modal('hide');" aria-label="Close">Cancelar</button>
                            </div>

                        </div><!-- / FIN BODY MODAL -->
                    </div><!-- / FIN MODAL CONTENT -->
                </div><!-- / FIN MODAL DIALOG -->
            </div><!-- / FIN MODAL FADE -->
        </div><!-- /FIN CONTAINER -->
    </div><!-- /.container-fluid -->
</div><!-- /.content -->
<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<script>
    $(document).ready(function (){
        let tabla = $("#tablaarticulos").DataTable({
            "ajax": {
                url: "dataCultivos.php?accion=listar",
                dataSrc: ""
            },
            "columns": [
                {"data": "id"},
                {"data": "referencia"},
                {"data": "nombre"},
                {"data": "fecha_registro"},
                {"data": "descripcion"},
                {"data": null, "orderable": false},
                {"data": null, "orderable": false}
            ],
            "columnDefs": [{
                targets: 5,
                "defaultContent": "<button class='btn btn-sm btn-success botonmodificar'><i class='fa-solid fa-pen'></i></button>",
                data: null
            }, {
                targets: 6,
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

        // funciones que interactuan con el formulario de entrada de datos
        function limpiarFormulario() {
            $('#Codigo').val('');
            $('#Referencia').val('');
            $('#Nombre').val('');
            $('#Fecha').val('');
            $('#Descripcion').val('');
        }

        function recuperarDatosFormulario() {
            let registro = {
                id: $('#Codigo').val(),
                referencia: $('#Referencia').val(),
                nombre: $('#Nombre').val(),
                fecha_registro: $('#Fecha').val(),
                descripcion: $('#Descripcion').val()
            };
            return registro;
        }


        // funciones para comunicarse con el servidor via ajax
        function agregarRegistro(registro) {
            $.ajax({
                type: 'POST',
                url: 'dataCultivos.php?accion=agregar',
                data: registro,
                success: function(msg) {
                    tabla.ajax.reload();
                },
                error: function() {
                    alert("Hay un problema para agregar el registro.");
                }
            });
        }

        function borrarRegistro(id) {
            $.ajax({
                type: 'GET',
                url: 'dataCultivos.php?accion=borrar&codigo=' + id,
                data: '',
                success: function(msg) {
                    tabla.ajax.reload();
                },
                error: function() {
                    alert("Hay un problema para borrar el registro.");
                }
            });
        }

        function recuperarRegistro(id) {
            $.ajax({
                type: 'GET',
                url: 'dataCultivos.php?accion=consultar&codigo=' + id,
                data: '',
                success: function(datos) {
                    $('#Codigo').val(datos[0].id);
                    $('#Referencia').val(datos[0].referencia);
                    $('#Nombre').val(datos[0].nombre);
                    $('#Fecha').val(datos[0].fecha_registro);
                    $('#Descripcion').val(datos[0].descripcion);
                    $("#FormularioUsuario").modal('show');
                },
                error: function() {
                    alert("Hay un problema para recuperar el registro.");
                }
            });
        }

        function modificarRegistro(registro) {
            $.ajax({
                type: 'POST',
                url: 'dataCultivos.php?accion=modificar&codigo=' + registro.id,
                data: registro,
                success: function(msg) {
                    tabla.ajax.reload();
                },
                error: function() {
                    alert("Hay un problema para modificar el registro.");
                }
            });
        }

    });
</script>
