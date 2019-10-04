<?php
namespace App\Middleware\Helper;
use App\User;
trait Auth{

    public static function LoginUser()
    {
        $u = new User();
        $data = $u->find($_SESSION['id'])->get();
        return $data[0];
    }
    
    
}