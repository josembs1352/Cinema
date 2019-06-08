<?php

require 'DataBase.php';
if (isset($_POST['RegistrarEmpleado'])) {
    $db = new DataBase();
    $db->Conectar();
    $sal = $nombre = isset($_POST['nombre_mutiplex']) ? $_POST['nombre_multiplex'] : null ;
    $recs = $db->consultar("Multiplex", $sal, "");
    $row = mysqli_fetch_array($recs);
        $idMultiplex = $row[0];
    $db->insertar(array(0, $idMultiplex, $_POST['nombre_empleado'], $_POST['numero_telefono'], $_POST['fecha_Contrato'], $_POST['salario']), "Empleado");
    require_once 'index.php';
}

if (isset($_POST['RegistrarCliente'])) {
    $db = new DataBase();
    $db->Conectar();
    $db->insertar(array(0, $_POST['NumDocumento'], $_POST['Nombres'], $_POST['Telefono'], $_POST['direccion']), "cliente");
    header('Location: index.php');
}

if (isset($_POST['RegistrarFactura'])) {
    $db = new DataBase();
    $db->Conectar();
    $db->insertar(array(0, $_POST['idCliente'], $_POST['idSillas'], $_POST['idComida'], $_POST['cantidadComida'], $_POST['cantidadSillas']), "Factura");
    require_once 'ClienteFactura.php';
}

if (isset($_POST['RegistrarSilla'])) {
    $db = new DataBase();
    $db->Conectar();

    $sal1 = $nombre = isset($_POST['Cedula']) ? $_POST['Cedula'] : null;
    $recss = $db->consultar("cliente","NumDocumento" , $sal1);
    $row1 = mysqli_fetch_array($recss);
    $idCedula = $row1[0];

    $sal = $nombre = isset($_POST['nombre_sala']) ? $_POST['nombre_sala'] : null;
    $recs = $db->consultar("sala", $sal, "");
    $row = mysqli_fetch_array($recs);
    $idSala = $row[0];

    $db->insertar(array(0, $idSala, $idCedula, $_POST['UbicacionColumna'], $_POST['UbicacionFila'], $_POST['Estado'], $_POST['tipo_silla'], $_POST['precio_silla']), "silla");
    header('Location: ClienteFactura.php?Cedula='.$idCedula);
//    require_once 'ClienteFactura.php';
}
if (isset($_POST['actualizarDatos'])) {
    $db = new DataBase();
    $db->conectar();
    $db->modificar($_GET['idEmpleado'], array($_POST['idMultiplex'], $_POST['salario']), "Empleado");
    header('Location: ListaEmpleados.php?idEmpleado='.$_POST['idEmpleado']);
}
?>
