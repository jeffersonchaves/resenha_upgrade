<?php

    require __DIR__."/../models/Usuario.php";

    function index(){

        $users = new Usuario();
        $listaUsuarios = $users->todos();

        require __DIR__."/../views/usuario_lista.php";
    }

    function cadastrar(){
        require __DIR__."/../views/usuario_cadastro.php";
    }

    function salvar(){

        $nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = new Usuario();
        $user->salvar($nome, $email, $senha);

        index();
    }


    function editar(){
        require __DIR__."/../views/usuario_editar.php";
    }

    function atualizar(){

        $id    = $_POST['id'];
        $nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = new Usuario();
        $user->salvar($nome, $email, $senha);

        index();

    }


    if (isset($_GET['acao']) and function_exists($_GET['acao']) ){
        call_user_func($_GET['acao']);
    }else {
        index();
    }




