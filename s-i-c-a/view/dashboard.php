 <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tablero</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Tablero principal</li>
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
                                <td>Id</td>
                                <td>Nombres</td>
                                <td>Apellidos</td>
                                <td>Telefono</td>
                                <td>Direccion</td>
                                <td>Email</td>
                                <td>Password</td>
                                <td>Ficha</td>
                                <td>Rol</td>
                                <td>Modificar</td>
                                <td>Borrar</td>
                                <!-- /FIN CAMPOS-->
                            </tr><!-- /FIN FILA-->
                            </thead> <!-- /FIN CABECERA -->
                        </table>
                        <button class="btn btn-sm btn-primary" id="BotonAgregar"><i class="fa-solid fa-user"></i> Agregar usuario</button>
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
                                        <!--<label>Identificacion:</label>-->
                                        <input type="number" id="Identificacion" class="form-control" placeholder="Ingrese N° de identificacion.">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <!--<label>Nombres:</label>-->
                                        <input type="text" id="Nombre" class="form-control" placeholder="Ingrese nombres.">
                                    </div>
                                </div>

                               <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <!--<label class="label-control col-md-12">Apellidos:-->
                                            <input type="text" id="Apellido" class="form-control" placeholder="Ingrese apellidos del usuario.">
                                        </label>
                                    </div>
                                </div>

                              <div class="form-row">
                                   <div class="form-group col-md-12">
                                       <!--<label class="label-control col-md-12">Telefono:-->
                                           <input type="number" id="N_telefono" class="form-control" value="    " placeholder="Ingrese telefono del usuario.">
                                       </label>
                                   </div>
                               </div>

                                <div class="form-row">
                                  <div class="form-group col-md-12">
                                      <!--<label class="label-control col-md-12">Direccion:-->
                                          <input type="text" id="Direccion" class="form-control" value="     " placeholder="Ingrese dirección del usuario.">
                                      </label>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                      <!--<label class="label-control col-md-12">Email:-->
                                          <input type="email" id="Email" class="form-control" placeholder="Ingrese email del usuario.">
                                      </label>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                      <!--<label class="label-control col-md-12">Password:-->
                                          <input type="password" id="Password" class="form-control" placeholder="Ingrese contraseña del usuario.">
                                      </label>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                      <!--<label class="label-control col-md-12">Ficha:-->
                                          <input type="number" id="Ficha" class="form-control" value="0" placeholder="Ingrese ficha del usuario.">
                                      </label>
                                  </div>
                              </div>

                              <div class="form-row">
                                  <div class="form-group col-md-12">
                                      <!--<label class="label-control col-md-12">Rol:-->
                                          <input type="number" id="Roles_id" class="form-control" placeholder="Ingrese el rol del usuario.">
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
 <script>
     $(document).ready(function (){
         let tabla = $("#tablaarticulos").DataTable({
             "ajax": {
                 url: "datos.php?accion=listar",
                 dataSrc: ""
             },
             "columns": [
                 {"data": "id"},
                 {"data": "identificacion"},
                 {"data": "nombre"},
                 {"data": "apellido"},
                 {"data": "n_telefono"},
                 {"data": "direccion"},
                 {"data": "email"},
                 {"data": "password"},
                 {"data": "ficha"},
                 {"data": "roles_id"},
                 {"data": null, "orderable": false},
                 {"data": null, "orderable": false}
             ],
             "columnDefs": [{
                 targets: 10,
                 "defaultContent": "<button class='btn btn-sm btn-success botonmodificar'><i class='fa-solid fa-pen'></i></button>",
                 data: null
             }, {
                 targets: 11,
                 "defaultContent": "<button class='btn btn-sm btn-danger botonborrar'><i class='fa-solid fa-trash-can'></i></button>",
                 data: null
             }],
             "language": {
                 "url": "https://cdn.datatables.net/plug-ins/1.11.5/i18n/es-CO.jsons",
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
             console.log(registro);
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
             $('#Identificacion').val('');
             $('#Nombre').val('');
             $('#Apellido').val('');
             $('#N_telefono').val('');
             $('#Direccion').val('');
             $('#Email').val('');
             $('#Password').val('');
             $('#Ficha').val('');
             $('#Roles_id').val('');
         }

         function recuperarDatosFormulario() {
             let registro = {
                 id: $('#Codigo').val(),
                 identificacion: $('#Identificacion').val(),
                 nombre: $('#Nombre').val(),
                 apellido: $('#Apellido').val(),
                 n_telefono: $('#N_telefono').val(),
                 direccion: $('#Direccion').val(),
                 email: $('#Email').val(),
                 password: $('#Password').val(),
                 ficha: $('#Ficha').val(),
                 roles_id: $('#Roles_id').val()
             };
             return registro;
         }

         // funciones para comunicarse con el servidor via ajax
         function agregarRegistro(registro) {
             $.ajax({
                 type: 'POST',
                 url: 'datos.php?accion=agregar',
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
                 url: 'datos.php?accion=borrar&codigo=' + id,
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
                 url: 'datos.php?accion=consultar&codigo=' + id,
                 data: '',
                 success: function(datos) {
                     $('#Codigo').val(datos[0].id);
                     $('#Identificacion').val(datos[0].identificacion);
                     $('#Nombre').val(datos[0].nombre);
                     $('#Apellido').val(datos[0].apellido);
                     $('#N_telefono').val(datos[0].n_telefono);
                     $('#Direccion').val(datos[0].direccion);
                     $('#Email').val(datos[0].email);
                     $('#Password').val(datos[0].password);
                     $('#Ficha').val(datos[0].ficha);
                     $('#Roles_id').val(datos[0].roles_id);
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
                 url: 'datos.php?accion=modificar&codigo=' + registro.id,
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