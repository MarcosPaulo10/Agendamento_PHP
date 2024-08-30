<?php
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

    }
?>