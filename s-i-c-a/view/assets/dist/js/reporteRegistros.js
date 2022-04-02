$(document).ready(function (){
    let tabla = $("#tablaarticulos").DataTable({
        "ajax": {
            url: "../dataArea.php?accion=listar",
            dataSrc: ""
        },
        "columns": [
            {"data": "id"},
            {"data": "nombre"},
            {"data": "medida"},
            {"data": "cantidad"},
            {"data": "ubicacion"},
            {"data": "cultivos_id"}
        ],
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
        $('#Nombre').val('');
        $('#Medida').val('');
        $('#Cantidad').val('');
        $('#Ubicacion').val('');
        $('#Cultivos_id').val('');
    }

    function recuperarDatosFormulario() {
        let registro = {
            id: $('#Codigo').val(),
            nombre: $('#Nombre').val(),
            medida: $('#Medida').val(),
            cantidad: $('#Cantidad').val(),
            ubicacion: $('#Ubicacion').val(),
            cultivos_id: $('#Cultivos_id').val()
        };
        return registro;
    }


    // funciones para comunicarse con el servidor via ajax
    function agregarRegistro(registro) {
        $.ajax({
            type: 'POST',
            url: 'dataArea.php?accion=agregar',
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
            url: 'dataArea.php?accion=borrar&codigo=' + id,
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
            url: 'dataArea.php?accion=consultar&codigo=' + id,
            data: '',
            success: function(datos) {
                $('#Codigo').val(datos[0].id);
                $('#Nombre').val(datos[0].nombre);
                $('#Medida').val(datos[0].medida);
                $('#Cantidad').val(datos[0].cantidad);
                $('#Ubicacion').val(datos[0].ubicacion);
                $('#Cultivos_id').val(datos[0].cultivos_id);
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
            url: 'dataArea.php?accion=modificar&codigo=' + registro.id,
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