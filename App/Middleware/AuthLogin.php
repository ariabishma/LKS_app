<?php
namespace App\Middleware;

class AuthLogin{
    public static function Run($param=1,$act=0)
    {
        if(!isLogin()){
            header('location:./login.php');
            exit('.');
        }

        return true;
    }
    
}