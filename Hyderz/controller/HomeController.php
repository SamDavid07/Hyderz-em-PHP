<?php
    include_once "../model/ContaModel.php";

    if(isset($_POST['novo'])){
        adicionar();
        header('Location:HomeController.php');
    }else if(isset($_POST['atualiza'])){
        editar();
        header("Location:HomeController.php");
    }else if(isset($_POST['exclui'])){
        $conta = buscar($_POST['id']);
        include_once ("../view/confirma.php");

    }else if (isset($_GET['sim'])){
        $id = $_GET['sim'];
        excluir($id);
        header("Location:HomeController.php");
    }else if(isset($_GET['id'])){
        $conta = buscar($_GET['id']);
        include_once "../view/atualiza_conta.php";
    }else{
        index();
    }
    function adicionar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        inserir($nome, $email, $senha );
    }
    function editar(){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        atualizar($id, $nome, $email, $senha);
    }
    function index(){
        $listaContas = listar();
        include_once "../view/home.php";
    }
?>