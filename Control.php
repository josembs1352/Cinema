<?php
require 'DataBase.php';
if (isset($_POST['RegistrarEmpleado'])) {
    $db = new DataBase();
    $db->Conectar();
    $db->insertar(array(0,$_POST['idMultiplex'], $_POST['nombre_empleado'], $_POST['numero_telefono'], $_POST['fecha_Contrato'], $_POST['salario']), "Empleado");
    require_once 'index.php';
    
}

if (isset($_POST['RegistrarCliente'])) {
    $db = new DataBase();
    $db->Conectar();
    $db->insertar(array(0,$_POST['NumDocumento'], $_POST['Nombres'], $_POST['Telefono'], $_POST['direccion'], $_POST['tipo_cliente']), "Cliente");
    require_once 'ClienteFactura.php';
    
}

if (isset($_POST['RegistrarFactura'])) {
    $db = new DataBase();
    $db->Conectar();
    $db->insertar(array(0,$_POST['idCliente'], $_POST['idSillas'], $_POST['idComida'], $_POST['cantidadComida'], $_POST['cantidadSillas']), "Factura");
    require_once 'ClienteFactura.php';
    
}

if (isset($_POST['RegistrarSilla'])) {
    $db = new DataBase();
    $db->Conectar();
    $db->insertar(array(0,$_POST['idSala'], $_POST['UbicacionColumna'], $_POST['UbicacionFila'], $_POST['Estado'], $_POST['tipo_silla'], $_POST['precio_silla']), "Silla");
    require_once 'ClienteFactura.php';
    
}
?>