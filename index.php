<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema</title>
        <link href="css/Style.css" type="text/css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div id="inicio">
            <h1>Bienvenido a cine Unimonito</h1>
             <button type="button" class="btn btn-primary" onclick="location = 'CrearCliente.php'">Registro Cliente</button>
            <button type="button" class="btn btn-primary" onclick="location = 'RegistroEmpleado.php'">Registro Empleado</button>

            <br><br><div>
                <h2>Escoja el Multiplex donde desea ver la pelicula</h2>
                <form method="post" action="Control.php">
                    
                        <?php
                        require_once 'DataBase.php';
                        $db = new DataBase();
                        $db->Conectar();
                        $res = $db->consultar("multiplex");
                        while ($row = mysqli_fetch_array($res)) {
                        $idMultiplex = $row[0];
                        $nombre = $row[1];
                        ?>
                    
                        
                   
                        
                        <div class="button"><span> <a  name="detalle" id="detalle" class="details" href="Salas.php?idMultiplex=<?php echo $idMultiplex; ?>" ><?php echo $nombre ?></a></span></div>
                        <?php } ?>
                    
                    
                    <!--<button type="button" class="btn btn-success" id="Aceptar" onclick="location = Salas.php?idMultiplex=<?php echo $idMultiplex; ?>">Aceptar</button>-->
                </form>

            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
