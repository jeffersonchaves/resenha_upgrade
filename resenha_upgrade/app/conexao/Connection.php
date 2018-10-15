<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 19/09/2018
 * Time: 11:53
 */

class Connection {

    //atributos
    public $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;dbname=resenha_upgrade3;", "root","");
    }

    public function getConnection(){
        return $this->connection;
    }


}

//Teste
//$conexao = new Connection();
//$conexao->getConnection();

