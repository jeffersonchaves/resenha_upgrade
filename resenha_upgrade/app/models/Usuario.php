<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 19/09/2018
 * Time: 10:48
 */

require __DIR__."/../conexao/Connection.php";

class Usuario {

    //ATRIBUTOS DA CLASSE
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $tipoUsuario; //1 para comum e 2 para admin

    public $conexao;

    //COMPORTAMENTOS
    public function __construct(){
        $this->tipoUsuario = 1;
        $conexao_objeto = new Connection();

        //o atributo $this->conexao agora sabe como se
        // comunicar com o banco de dados
        $this->conexao = $conexao_objeto->getConnection();
    }

    public function exibe (){
        echo "usuario {$this->nome} foi criado com o tipo {$this->tipoUsuario} e id {$this->id} \n";
    }

    public function todos(){
        return $this->conexao->query("select * from usuarios")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById(int $id){
        return $this->conexao->query("select * from usuarios where id = {$id}")->fetch(PDO::FETCH_ASSOC);
    }

    public function salvar($nome, $email, $senha){

        $sql = "insert into usuarios(nome, email, senha) values ('$nome', '$email', '$senha')";
        $resultado = $this->conexao->exec($sql);
        return $resultado;
    }

    public function update($id, $nome, $email, $senha){

        $sql = "update usuarios set nome = '$nome', email='$email', senha='$senha' where id=$id";
        $resultado = $this->conexao->exec($sql);
        return $resultado;
    }


}

//$usuario1 = new Usuario();
//$usuario1->nome = "Jefferson";
//$usuario1->id = 1;
//$usuario1->exibe();
//
//$usuario2 = new Usuario();
//$usuario2->nome = "Pedro Roque";
//$usuario2->id = 2;
//$usuario2->exibe();

// $usuario = new Usuario();
// $usuario->atualizar(1, "teste", "teste@gmail", "123");
