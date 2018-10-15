<?php

    require __DIR__."/../models/Usuario.php";

    $users = new Usuario();
    $listaUsuarios = $users->todos();

    $teste = "palmeiras não tem..";
    $teste1 = "Jefferson";

    require __DIR__."/../views/usuario_lista.php";

    //print_r($listaUsuarios);


