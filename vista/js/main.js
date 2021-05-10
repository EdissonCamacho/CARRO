$(document).ready(function() {

    cargarDatos();
    $("#btnModificar").hide();
    $("#btnGuardar").show();



    function cargarDatos() {

        var cargar = "ok";
        var objData = new FormData();
        objData.append("cargar", cargar);

        $.ajax({
            url: "control/carroControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                respuesta.forEach(cargarTabla);

                var concatenarTabla;

                function cargarTabla(item, index) {


                    concatenarTabla += '<tr>';
                    concatenarTabla += '<td>' + item.modelo + '</td>';
                    concatenarTabla += '<td>' + item.color + '</td>';
                    concatenarTabla += '<td>' + '<button id="btnEditar" type="button"  modelo=' + item.modelo + ' color=' + item.color + '  idCarro=' + item.idCarro + ' class="btn btn-primary"><span class="glyphicon glyphicon-copy"></span></button>' + '</td>';
                    concatenarTabla += '<td>' + '<button id="btnEliminar" type="button"   idCarro=' + item.idCarro + ' class="btn btn-danger"><span class="glyphicon glyphicon-copy"></span></button>' + '</td>';


                    concatenarTabla += '</tr>';













                }

                $("#cuerpoTabla").html(concatenarTabla);





            }




        })




    }




    $("#btnGuardar").click(function() {

        var modelo = $("#Modelo").val();
        var color = $("#Color").val();

        var objData = new FormData();
        objData.append("modelo", modelo);
        objData.append("color", color);

        $.ajax({
            url: "control/carroControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                alert(respuesta);

                cargarDatos();
                blanquear();





            }




        })






    })
    var idCarro = 0;

    $("#tablaCarros").on("click", "#btnEditar", function() {

        var modelo = $(this).attr("modelo");
        var color = $(this).attr("color");
        idCarro = $(this).attr("idCarro");

        $("#Modelo").val(modelo);
        $("#Color").val(color);

        $("#btnModificar").show();
        $("#btnGuardar").hide();



    })


    $("#btnModificar").click(function() {

        var modelo = $("#Modelo").val();
        var color = $("#Color").val();


        var objData = new FormData();
        objData.append("modeloM", modelo);
        objData.append("colorM", color);
        objData.append("idCarro", idCarro);

        $.ajax({
            url: "control/carroControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                alert(respuesta);

                cargarDatos();
                blanquear();
                $("#btnGuardar").show();
                $("#btnModificar").hide();







            }




        })







    })

    $("#tablaCarros").on("click", "#btnEliminar", function() {

        Swal.fire({
            title: '¿Estas Seguro?',
            text: "¡No se podrá revertir la accion!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                var idEliminar = $(this).attr("idCarro");
                var objData = new FormData();

                objData.append("idEliminar", idEliminar);

                $.ajax({
                    url: "control/carroControl.php",
                    type: "post",
                    dataType: "json",
                    data: objData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(respuesta) {

                        Swal.fire(
                            'Eliminado!',
                            'El registro fue eliminado',
                            'success'
                        )

                        cargarDatos();






                    }




                })








            }
        })





    })


    function blanquear() {

        $("#Modelo").val("");
        $("#Color").val("");
    }




















})