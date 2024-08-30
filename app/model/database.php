<?php

    include_once __DIR__ . '/../../config/dbconfig.php'


    class database {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $conn;

        fuction __construct() {
            $this->servername = DB_HOST;
            $this->username = DB_USER;
            $this->password = DB_PASSWORD;
            $this->dbname = DB_NAME;

        } 
        
        fuction connect () {
            $this->conn = new mysql ($this->servername, $this->username, $this->password, $this->dbname);

            if ($this->conn->connect_error) {
                die("Falha na conexão com o banco de dados: " . $this->conn->connect_error);
            }

            return $this->conn;
        }

        fuction closeconnection () {
            if ($this->conn) {
                $this->conn->close();
            }
        }

    }
?>