<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"> </script>






    <link rel='stylesheet' type='text/css' media='screen' href='vista/css/main.css'>
    <script src='vista/js/main.js'></script>



</head>

<body>






    <div class="container">
        <div class="jumbotron">
            <h1>Carros </h1>

            <img id="img" class="img-circle" src="../carros/vista/imagenes/carro.gif" alt="" srcset="">
            <p>Crea y tenga un inventario de sus vehiculos en su centro de servicio</p>
        </div>



    </div> <br>


    <div class="container">
        <div class="row">
            <div class="col-lg-6">


                <div class="form-group">
                    <label for="Modelo">Modelo Vehiculo:</label>
                    <input type="text" class="form-control" id="Modelo">
                </div>
                <div class="form-group">
                    <label for="Color">Color:</label>
                    <input type="text" class="form-control" id="Color">
                </div>

                <button id="btnGuardar" type="button" class="btn btn-primary"> Guardar Carro </button>
                <button id="btnModificar" type="button" class="btn btn-primary"> Modificar </button>
                </form>



            </div>
            <div class="col-lg-6">

                <table id="tablaCarros" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Color</th>
                            <th>Acion</th>
                        </tr>
                    </thead>
                    <tbody id="cuerpoTabla">


                    </tbody>
                </table>







            </div>
        </div>

    </div>

    


</body>

</html>