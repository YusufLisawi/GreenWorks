<?php

    require_once "user.class.php";
    require_once "auth.class.php";
    $showPopUp = False;

    
    $usr = new User();
    $auth = new Auth();


    if($auth -> isAuth())
    {
        $auth -> redirect("mygreenworks.php");
    }


    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        
        $data = $usr -> getUser($email);

        $found = $data['email'] ?? False;
        

        if($found) // User exist in the Database
        {
            $pass = $auth -> checkUser($email, $pwd, $data['email'], $data['password']);
            if($pass)
            {
                $auth -> start($data['username']);
                $auth -> redirect("mygreenworks.php");
            }
        } else {
            $showPopUp = True;
        }

    }

    
    
    