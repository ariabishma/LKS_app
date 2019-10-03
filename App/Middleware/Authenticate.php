<?php
namespace App\Middleware;

class Authenticate{
    public static function Run($param)
    {
        if($param != "bishma"){
            exit("Error : you're not bishma");
        }
        return false;
    }
    
}