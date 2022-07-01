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
        $email = trim(htmlentities($_POST['email']));
        $pwd = trim(htmlentities($_POST['password']));

        
        $data = $usr -> getUser($email);
        $found = $data['email'] ?? False;

        if($found) // User exist in the Database
        {
            $pass = $auth -> checkUser($email, $pwd, $data['email'], $data['password']);

            if ($pass)
            {
                $auth -> start($data['username'], $data['id']);
                $auth -> redirect("mygreenworks.php");
            }
            else {
                $showPopUp = True;
                $_SESSION['message'] = "Password is incorrect";
            }
        }
        else 
        {
            $showPopUp = True;
            $_SESSION['message'] = "Email not found";
        }
    }

    
    
    