<?php

class DataBase {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;
    private $link;

    function DataBase() {
        $this->usuario = "root";
        $this->contraseña = "";
        $this->servidor = "localhost";
        $this->nomBD = "cinema1";
        $this->link = "";
    }

    function Conectar() {
        $this->link = mysqli_connect($this->servidor, $this->usuario, $this->contraseña);
        mysqli_select_db($this->link, $this->nomBD);

        //$this->link = mysql_conect($this->servidor, $this->usuario, $this->contraseña);
        //mysql_select_db($this->nomBD,$this->link);
    }

    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        while (list($key, $val) = each($fila)) {
            $valoresFila = $valoresFila . "'" . $val . "', ";
        }
        $valoresFila = substr($valoresFila, 0, -2);
        mysqli_query($this->link, " insert into " . $tabla . " values (" . $valoresFila . "); ")or die('la consulta fallo' . mysqli_error($this->link));

        //mysql_query(" insert into ".$tabla." values (".$valoresFila.");")or die('la consulta fallo'.mysqli_error);
    }

    function consultar($tabla = "", $campo = "", $dato = "") {
        if ($campo == "") {
            $query = " select * from " . $tabla;
        } else if ($dato == "") {
            $query = "select " . $campo . " from " . $tabla;
        } else {
            $query = "select * from " . $tabla . " where " . $campo . " = " . $dato;
        }
        $res = mysqli_query($this->link, $query);
        // $res = mysql_query($query);
        return $res;
    }
  function modificar($idEmpleado = "", $fila = array(), $tabla = "") {
        mysqli_query($this->link,"update " . $tabla . " SET idMultiplex ='" . $fila[1] . "' WHERE idMultiplex = '" . $idEmpleado . "';")or die("La consulta falló " . mysql_error());
        mysqli_query($this->link,"update " . $tabla . " SET salario ='" . $fila[4] . "' WHERE salario = '" . $idEmpleado . "';")or die("La consulta falló " . mysql_error());
    }
}
