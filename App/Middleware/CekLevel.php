<?php
namespace App\Middleware;
use App\User;
class CekLevel{

    public static function LoginUser()
    {
        $u = new User();
        $data = $u->find($_SESSION['id'])->get();
        return $data[0];
    }
    
    public static function Run($param='user',$act=0)
    {
        $user = self::LoginUser();
        if($user['level'] != $param){
            exit('You are not'.$param);
        }
    }
    
}