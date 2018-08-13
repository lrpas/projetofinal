<?php

    class db {
        private $host = 'localhost';
        private $usuario = 'root';
        private $senha = '';
        private $database = 'sistema';

        public function conecta_mysql(){

            //cria conexao com o banco de dados
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);


            return $con;

        }

    }

?>