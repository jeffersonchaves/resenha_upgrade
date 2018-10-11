<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 21/09/2018
 * Time: 08:57
 */

require '../connection/Connection.php';

class Usuario {

    //ATRIBUTOS
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $tipo; //1 para comum, 2 para admin

    private $conexao;

    //COMPORTAMENTOS

    public function __construct() {
        $this->tipo = 1;
        $this->nome = "anonimo";
        $this->conexao = new Connection();
    }

    public function cadastrar(){
        $this->conexao->getConnection()->query("INSERT INTO usuarios (nome, email, senha, tipo) VALUES (?, ?, ?, ?)");
    }

    public function getUsuario() {
    }

    public function getUsuarios() {
    }

    public function editar() {
    }

    public function excluir(){
    }

    public function exibe(){
        echo "o usuario {$this->nome} tem o email {$this->email}";
    }
}

$usuario1 = new Usuario();
$usuario1->nome = "Jefferson Chaves";
$usuario1->email = "jefferson.email@ifc.edu.br";
$usuario1->exibe();

echo "<br>";
$usuario2 = new Usuario();
$usuario2->nome = "Leonardo Chaves";
$usuario2->email = "leonardo@gmail.com";

//echo "<pre>";
//print_r($usuario1);
//echo "</pre>";



