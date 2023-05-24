<?php
    function conectar(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "hyderz";

        $con = new mysqli($servidor, $usuario, $senha, $banco);
        return $con;
    }
?>