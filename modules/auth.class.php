<?php
    session_start();
    class Auth{
        public function start($username){
            session_start();
            $_SESSION['username'] = $username;
        }

        public function isAuth(){
            return (isset($_SESSION['username'])) ? True : False;
        }

        public function checkUser($inemail,$inpwd, $outemail, $outpwd)
        {
            if ($inemail == $outemail && password_verify($inpwd, $outpwd))
                return True;
            return False; 
        }

        public function end(){
            session_destroy();
            unset($_SESSION['username']);
        }
        public function redirect($url)
        {
            Header("Location: $url");
        }
    }