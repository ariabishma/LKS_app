<?php
session_start();
function isLogin()
{
    if(!isset($_SESSION['id'])){
        return 0;
    }
    return 1;
}
define('BASE_DIR',__DIR__);
define('PUBLIC_DIR',__DIR__."/public/");

include "bootstrap/assembly.php";