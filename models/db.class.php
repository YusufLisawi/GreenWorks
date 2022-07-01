<?php
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    // class dbc
    class DBC {
        private $host = 'localhost'; //localhost
        private $user = 'root'; //root
        private $dbpwd = 'root'; //change to your password (root)
        private $port = 8889; // by default yours will be 3306
        private $dbname = "greenworks";
        private $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

        public function connect(){
            $dsn  = "mysql:host=" . $this -> host . ";dbname=".$this -> dbname . ";port=" . $this->port; 
            // $dsn  = "mysql:host=" . $this -> host . ";dbname=".$this -> dbname; 
            try{
                $pdo = new PDO($dsn, $this->user,$this->dbpwd,$this->opt);
                return $pdo;
            }
            catch (Exception $e){
                die($e->getMessage());
            }
        }
    }