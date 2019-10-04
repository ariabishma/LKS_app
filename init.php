<?php
session_start();
function isLogin()
{
    if(!isset($_SESSION['id'])){
        return 0;
    }
    return 1;
}

 function LoginUser()
{
    $u = new App\User();
    $data = $u->find($_SESSION['id'])->get();
    return $data[0];
}

function bcrypt($pass)
{
    return password_hash($pass,PASSWORD_BCRYPT);
}


define('BASE_DIR',__DIR__);
define('PUBLIC_DIR',__DIR__."/public/");

include "bootstrap/assembly.php";