<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema</title>
        <link href="css/Estilo1.css" type="text/css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <h3 class="card-title text-center">Benvenido a cinema Unimonito</h3>
                        <h3 class="card-title text-center">Datos de la Factura</h3>
                        <form method="post" enctype="multipart/form-data" action="Control.php">
                            <!-- to error: add class "has-danger" -->

                            <!--<div class="form-group">-->

                            <br><label for="marca">Nombre Del Cliente: </label><br>

                            <label id="idCliente" name="idCliente" >
                                <?php
                                require_once 'DataBase.php';
                                $db = new DataBase();
                                $db->Conectar();
                                $idCliente = $_GET['Cedula'];
                                $rec = $db->consultar("cliente", "idCliente", $idCliente);
                                $row = mysqli_fetch_array($rec);
                                echo $row[2];
                                ?>
                                <!--                            <option value="value1 ">Activo corriente</option> 
                                                                <option value="value2 ">Activo fijo</option>
                                                                <option value="value3 ">Activo financiero</option>
                                                                <option value="value4 ">Activo intangible</option>
                                                                <option value="value5 ">Activo subyacente</option>
                                                                <option value="value6 ">Activo funcional</option>-->
                            </label><br><br>
                            <label for="marca">Posicion Silla: </label><br>

                            <select id="idSillas" name="idSillas" >
                                <?php
                                require_once 'DataBase.php';
                                $db = new DataBase();
                                $db->Conectar();
                                $res = $db->consultar("silla", "idSillas");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<option>';
                                    echo $row['idSillas'];
                                    echo '</option>';
                                }
                                ?>
                                <!--                            <option value="value1 ">Activo corriente</option> 
                                                                <option value="value2 ">Activo fijo</option>
                                                                <option value="value3 ">Activo financiero</option>
                                                                <option value="value4 ">Activo intangible</option>
                                                                <option value="value5 ">Activo subyacente</option>
                                                                <option value="value6 ">Activo funcional</option>-->
                            </select><br>

                            <br><label for="marca">idComida: </label><br>

                            <select id="idComida" name="idComida" >
                                <?php
                                require_once 'DataBase.php';
                                $db = new DataBase();
                                $db->Conectar();
                                $res = $db->consultar("comida");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<option>';
                                    echo $row[1];
                                    echo '</option>';
                                }
                                ?>
                                <!--                            <option value="value1 ">Activo corriente</option> 
                                                                <option value="value2 ">Activo fijo</option>
                                                                <option value="value3 ">Activo financiero</option>
                                                                <option value="value4 ">Activo intangible</option>
                                                                <option value="value5 ">Activo subyacente</option>
                                                                <option value="value6 ">Activo funcional</option>-->
                            </select><br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cantidad Comida</label>
                                <input type="text" name="cantidadComida" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Cantidad Sillas</label>
                                <input type="text" name="cantidadSillas" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <input id="RegistrarEmpleado" name="RegistrarFactura" onclick="location = 'index.php'" type="submit" class="btn btn-primary btn-block" value="registrarFactura">
                            <button type="button" class="btn btn-primary btn-block" onclick="location = 'index.php'" id="reEmpleado">Volver</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
