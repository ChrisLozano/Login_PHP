<?php
Class Conexion {

    public static function conectar() {    

	$servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "ejemplo";
        $con = mysql_connect($servidor, $user, $password) or die("Error de conexion al Servidor");
        mysql_select_db($database) or die("La base de datos no existe");
        return $con;
    }

}

?>