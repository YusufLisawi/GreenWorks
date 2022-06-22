<?php
    require_once "auth.class.php";

    $auth = new Auth();
    $auth -> end();
    error_log("Logged out");