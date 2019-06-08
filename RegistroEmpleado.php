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
                    <h3 class="card-title text-center">Ingrese La informacion del empleado</h3>
                    <div class="card-text">
                        <!--
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                        <form method="post" enctype="multipart/form-data" action="Control.php">
                            <!-- to error: add class "has-danger" -->

                            <!--<div class="form-group">-->

                            <br><label for="marca">Multiplex: </label><br>

                           <select id="idMultplex" name="idMultiplex" >
                                <?php
                                require_once 'DataBase.php';
                                $db=new DataBase();
                                $db->Conectar();
                                $res=$db->consultar("Multiplex","nombre_multiplex","");
                                while($row=  mysqli_fetch_array($res)){
                                    echo '<option>';
                                    echo $row['nombre_multiplex'];
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
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" name="nombre_empleado" class="form-control form-control-sm"  aria-describedby="emailHelp">
                            </div>

                            <div class="form-group">

                                <label for="exampleInputEmail1">Telefono</label>
                                <input type="text" name="numero_telefono" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fecha Contrato </label>
                                <input type="date" name="fecha_Contrato" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Salario</label>
                                <input type="text" name="salario" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <input id="RegistrarEmpleado" name="RegistrarEmpleado" type="submit" class="btn btn-primary btn-block" value="registrar">
                            <button type="button" class="btn btn-primary btn-block" onclick="location = 'index.php'" id="reEmpleado">Volver</button>

                        </form>
                    </div>
                    </div>
                </div>
            </div>


            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
