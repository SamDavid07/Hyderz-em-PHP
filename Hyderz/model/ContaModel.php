<?php
    include_once 'database.php';

    function listar(){
        $con = conectar();
        $sql = "SELECT * FROM conta";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc()){
            $dados[] = $d;
        }
        return $dados;
    }
    function inserir($nome, $email, $senha){
        $con = conectar();
        $sql = "INSERT INTO conta (nome, email, senha) VALUES('$nome', '$email', '$senha')";
        $con->query($sql);
    }
    
    function buscar($id){
        $con = conectar();
        $sql = "SELECT * FROM conta WHERE id='$id'";
        $resultado = $con->query($sql);
        $dados = Array();
        while($d = $resultado->fetch_assoc()){
            $dados[]= $d;
        }
        return $dados[0];
    }
    function atualizar($id, $nome, $email){
        $con = conectar();
        $sql = "UPDATE conta SET nome='$nome', email='$email' WHERE id='$id'";
        $con->query($sql);
    }
    function excluir($id){
        $con = conectar();
        $sql = "DELETE FROM conta WHERE id='$id'";
        $con->query($sql);
    }
?>