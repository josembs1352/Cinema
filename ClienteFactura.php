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
                    <h3 class="card-title text-center">Ingrese La informacion del Cliente</h3>
                    <div class="card-text">
                        <!--
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                        <form method="post" enctype="multipart/form-data" action="Control.php">

                            <br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Numero de Documento</label>
                                <input type="number" name="NumDocumento" class="form-control form-control-sm"  aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" name="Nombres" class="form-control form-control-sm"  aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">

                                <label for="exampleInputEmail1">Telefono</label>
                                <input type="number" name="Telefono" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Direccion</label>
                                <input type="text" name="direccion" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">tipo_cliente</label>
                                <input type="text" name="tipo_cliente" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <input id="RegistrarEmpleado" name="RegistrarCliente" type="submit" class="btn btn-primary btn-block" value="registrar">

                        </form>
                        <h3 class="card-title text-center">Datos de la Factura</h3>
                        <form method="post" enctype="multipart/form-data" action="Control.php">
                            <!-- to error: add class "has-danger" -->

                            <!--<div class="form-group">-->

                            <br><label for="marca">idCliente: </label><br>

                            <select id="idCliente" name="idCliente" >
                                <?php
                                require_once 'DataBase.php';
                                $db = new DataBase();
                                $db->Conectar();
                                $res = $db->consultar("Cliente", "idCliente");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<option>';
                                    echo $row['idCliente'];
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
                            <br>
                            <br><label for="marca">idSilla: </label><br>

                            <select id="idSillas" name="idSillas" >
                                <?php
                                require_once 'DataBase.php';
                                $db = new DataBase();
                                $db->Conectar();
                                $res = $db->consultar("Silla", "idSillas");
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
                                $res = $db->consultar("Comida", "idComida");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<option>';
                                    echo $row['idComida'];
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
