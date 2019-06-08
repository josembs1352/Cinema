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
                    <h3 class="card-title text-center">Lista de Empleados En el Sistema</h3>
                    <div class="card-text">
                        <table width="10%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <h1 class="page-header"> Datos del Cliente</h1>
                            <div class="col-md-push-6"> 
                                <tr>
                                    <th>Id Empleado</th>
                                    <th>Multiplex_idMultiplex</th>
                                    <th>nombre_empleado</th>
                                    <th>numero_telefono</th>
                                    <th>fecha_contrato</th>
                                    <th>Salario</th>
                                </tr>                 
                                <tbody>
                                    <?php
                                    require_once 'DataBase.php';
                                    $db = new DataBase();
                                    $db->conectar();
                                    $rec = $db->consultar("empleado");
                                    while ($row = mysqli_fetch_array($rec)) {
                                        ?>
                                        <tr class="odd gradeX">
                                            <?php
                                            echo "<td>$row[0]</td>";
                                            echo "<td>$row[1]</td>";
                                            echo "<td>$row[2]</td>";
                                            echo "<td>$row[3]</td>";
                                            echo "<td>$row[4]</td>";
                                            echo "<td>$row[5]</td>";
                                            ?>
                                        <?php } ?>
                                    </tr>
                                </tbody>
                        </table>
                        <div class="global-container">
                            <div class="card login-form">
                                <div class="card-body">
                                    <h1 class="page-header"> Actualizar Empleado </h1>
                                    <form method="POST" action="Control.php" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-7">
                                                Id Empleado: <input type="number" name="empleado" id="empleado"  class="empleado"><br>                                         
                                                Modificar Multiplex:
                                                <select name="Multiplex" id="Multiplex" >
                                                    <?php
                                                    require_once 'DataBase.php';
                                                    $db = new DataBase();
                                                    $db->Conectar();
                                                    $res = $db->consultar("multiplex");
                                                    while ($row = mysqli_fetch_array($res)) {
                                                        echo '<option>';
                                                        echo $row[0];
                                                        echo '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <br>
                                                Salario: <input type="number" name="salario" id="salario"  class="salario">
                                                <input type="submit" name="actulizarDatos" id="actulizarDatos" value="Actualizar Datos" class="form-control">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
