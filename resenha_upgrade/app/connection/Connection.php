<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 20/09/2018
 * Time: 16:53
 */

class Connection {

    //atributos
    private $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;dbname=resenha_upgrade;", "root","");
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //metodos
    public function getConnection(){
        return $this->connection;
    }
}

