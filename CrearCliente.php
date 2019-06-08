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
                        <form method="POST" enctype="multipart/form-data" action="Control.php">

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
                            <input id="RegistrarEmpleado" name="RegistrarCliente"  type="submit" class="btn btn-primary btn-block" value="registrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
