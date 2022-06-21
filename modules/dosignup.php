<?php

    require_once "user.class.php";
    require_once "auth.class.php";
    $exist = False;

    
    $usr = new User();
    $auth = new Auth();


    if($auth -> isAuth())
    {
        $auth -> redirect("greenworks.php");
    }


    if(isset($_POST['username']))
    {
        $fname = trim(htmlentities($_POST['firstname']));
        $lname = trim(htmlentities($_POST['lastname']));
        $username = trim(htmlentities($_POST['username']));
        $email = trim(htmlentities($_POST['email']));
        $pwd = trim(htmlentities($_POST['password']));

        
        if($usr -> isExist($username, $email)){
            $exist = True;
        } else {
            $usr -> insertUser($fname,$lname,$username,$email,$pwd);
            $auth -> start($username);
            $auth -> redirect("login.php");
        }

    }