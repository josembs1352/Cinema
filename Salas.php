<!DOCTYPE html>
<?php
$idMultiplex = $_GET['idMultiplex'];
require'DataBase.php';
$db = new DataBase();
$db->conectar();
$rec = $db->consultar("multiplex", "idMultiplex", $idMultiplex);
while ($row = mysqli_fetch_array($rec)) {
    $idMultiplex = $row[0];
    $nombre_multiplex = $row[1];
}
?>
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
                    <br> <h3 class="card-title text-center">Seleccione la sala donde va a ver la pelicula</h3>

                    <div class="section group">
                        <?php
                        require_once 'DataBase.php';
                        $db = new DataBase();
                        $db->conectar();
                        $rec = $db->consultar("sala", "idMultiplex", $idMultiplex);
                        while ($row = mysqli_fetch_array($rec)) {
                            $idSala = $row[0];
                            $idMultiplex = $row[1];
                            $Cantidadfilas = $row[2];
                            $CantidadColumnas = $row[3];
                            $nombre_sala = $row[4];                         
                            ?>
                            
                        <button type="button" onclick="location='Sillas.php?nombreSala=<?php echo $nombre_sala; ?>'" class="btn-success"><?php echo $nombre_sala ?></button>
                            
                        <?php } ?>
                    </div>
                    <button type="button" class="btn btn-primary btn-block" onclick="location = 'index.php'">Volver</button>

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
