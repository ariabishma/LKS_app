<?php
namespace App\Middleware;
use App\User;
use App\Middleware\Helper\Auth;

class CekLevel{
    use Auth;
 
    
    public static function Run($param='user',$act=0)
    {
        $user = self::LoginUser();
        if($user['level'] != $param){
            exit('You are not'.$param);
        }
    }
    
}