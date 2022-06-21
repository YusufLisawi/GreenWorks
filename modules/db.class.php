<?php

    class DBC {
        private $host = "localhost";
        private $user = "root";
        private $dbpwd = "root"; //change to your password
        private $port = 8889; // by default yours will be 3306
        private $dbname = "greenworks";
        private $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

        protected function connect(){
            $dsn  = "mysql:host=" . $this -> host . ";dbname=".$this -> dbname . ";port=" . $this->port; 
            try{
                $pdo = new PDO($dsn, $this->user,$this->dbpwd,$this->opt);
                return $pdo;
            }
            catch (Exception $e){
                die($e->getMessage());
            }
        }
    }