<?php
    session_start();
    class Auth{
        public function start($username, $user_id){
            session_destroy();
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user_id;
        }
        
        public function isAuth(){
            return (isset($_SESSION['username'])) ? True : False;
        }

        public function checkUser($inemail,$inpwd, $outemail, $outpwd)
        {
            if ($inemail == $outemail && password_verify($inpwd, $outpwd))
                return True;
            else
                return False;
        }

        public function end(){
            session_destroy();
            unset($_SESSION['username']);
            session_unset();
            header('Location: /greenworks/index.php');
        }
        public function redirect($url)
        {
            Header("Location: $url");
            return;
        }
    }