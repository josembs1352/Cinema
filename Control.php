<?php

require 'DataBase.php';
if (isset($_POST['RegistrarEmpleado'])) {
    $db = new DataBase();
    $db->Conectar();
    $sal = isset($_POST['nombre_mutiplex']) ? $_POST['nombre_multiplex'] : null;
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

    $Cliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : null;
    $reclie = $db->consultar("cliente", "Nombres", $Cliente);
    $row2 = mysqli_fetch_array($reclie);
    $idCedula = $row2[0];
    echo $Cliente;

    $Snacks = isset($_POST['idComida']) ? $_POST['idComida'] : null;
    $recs = $db->consultar("comida", "nombre_Comida", $Snacks);
    $row = mysqli_fetch_array($recs);
    $idComida = $row[0];

    $db->insertar(array(0, $idCedula, $_POST['idSillas'], $idComida, $_POST['cantidadSillas'], $_POST['cantidadComida']), "factura");
    require_once 'ClienteFactura.php';
}

if (isset($_POST['RegistrarSilla'])) {
    $db = new DataBase();
    $db->Conectar();

    $sal1 = isset($_POST['Cedula']) ? $_POST['Cedula'] : null;
    $recss = $db->consultar("cliente", "NumDocumento", $sal1);
    $row1 = mysqli_fetch_array($recss);
    $idCedula = $row1[0];

    $sal = isset($_POST['nombre_sala']) ? $_POST['nombre_sala'] : null;
    $recs = $db->consultar("sala", $sal, "");
    $row = mysqli_fetch_array($recs);
    $idSala = $row[0];

    $db->insertar(array(0, $idSala, $idCedula, $_POST['UbicacionColumna'], $_POST['UbicacionFila'], $_POST['Estado'], $_POST['tipo_silla'], $_POST['precio_silla']), "silla");
    header('Location: ClienteFactura.php?Cedula=' . $idCedula);
//    require_once 'ClienteFactura.php';
}
if (isset($_POST['actulizarDatos'])) {
    $db = new DataBase();
    $db->conectar();
    $db->modificar($_POST['empleado'], array($_POST['Multiplex'], $_POST['salario']), "empleado");
    echo ' <script language="javascript">Actualizado("Yes");</script>';
    include 'ListaEmpleados.php';
}
?>
