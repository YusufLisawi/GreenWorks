<?php

    require_once "db.class.php";

    class User extends DBC{

        private $email;
        private $pwd;

        public function getUser($email){
            $sql = "SELECT * FROM `users` WHERE email = ? LIMIT 1;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$email]);
            $data = $stmt -> fetch();
            $stmt = null;
            return $data;

        }

        public function insertUser($firstName, $lastName,$username,$email, $pwd) {
            $sql = "INSERT INTO users(firstname,lastname,username,email,password) VALUES(?,?,?,?,?);";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$firstName,$lastName,$username,$email,password_hash($pwd, PASSWORD_DEFAULT)]);
            $stmt = null;
        }

        public function remove($username){
            $sql = "DELETE FROM `users` WHERE username = ?;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$username]);
            $stmt = null;
        }

        public function isExist($username, $email){
            $sql = "SELECT * FROM `users` WHERE username = ? OR email = ?;";
            $stmt = $this
                    ->connect()
                    ->prepare($sql);
            $stmt -> execute([$username, $email]); 
            $exist = ($stmt -> rowCount() > 0) ? True  : False;
            $stmt = null;
            return $exist;
        }

        public function getPwd(){
            return $this -> pwd;
        }
        public function getEmail(){
            return $this -> email;
        }
    }
