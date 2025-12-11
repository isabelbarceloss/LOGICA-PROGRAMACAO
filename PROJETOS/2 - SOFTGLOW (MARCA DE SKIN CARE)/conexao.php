<?php
    // Integrantes do Grupo:
    //  Isabel Barcelos Agualuza 11251101322
    //  Isabela Pereira de Brito 11251100580
    //  João de Lima Vernosi Diniz 11251102193
    //  Raquel Layane Silva 11251101679
    
    // página que faz a conexão com o banco

    class db {
        // private - somente utilizada nesta página
        private $host = 'localhost';
        private $usuario = 'root'; // padrao
        private $senha = '';
        private $database = 'cadastros';

        // public - conectar com mysql
        public function conecta_mysql() {
            // con - variável que vai conectar com o banco, baseado nas informações: host, usuário, senha e database
            $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            return $con;
        }
    }
?>