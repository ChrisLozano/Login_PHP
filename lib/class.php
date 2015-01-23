<?php

class Usuario{

    public function registrar_usuario($nombre, $email, $password){
        $sql = "INSERT INTO usuarios (nombre, email, password, estatus, privilegios) VALUES ('$nombre', '$email', '$password', 'Activo', 'Usuario')";
        $result = mysql_query($sql, Conexion::conectar());
        echo
        '<script>
        alert("Usuario agregado con exito");
        window.location.href="index.php"
        </script>';
    }

    public function ingresar_usuario($email, $password){
        $sql = "SELECT * FROM  usuarios WHERE email = '$email'  AND password = '$password' AND estatus = 'Activo' ";
        $result = mysql_query($sql, Conexion::conectar());
        if($num_rows = mysql_num_rows($result) == 1){
            $row = mysql_fetch_array($result);
            $_SESSION['nombre']= $row[1];
            $_SESSION['privilegios'] = $row[5];
            echo
            '<script>
            alert("Bienvenido al sistema");
            window.location.href="index.php"
            </script>';

        }else{
           echo '<p style="color: red"> Email o password incorrectos </p>';
       }

   }



}

?>