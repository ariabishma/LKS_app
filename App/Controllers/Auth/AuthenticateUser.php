<?php
namespace App\Controllers\Auth;

use Core\Controller\BaseController;
use App\User;

class AuthenticateUser extends BaseController{
   
    public function __construct()
    {
        // $this->Middleware('\App\Middleware\Authenticate','bishma');
        // $this->Middleware('\App\Middleware\Authenticate','pengguna');
    } 
    

    public function login()
    {
        
        return $this->view('login');
    }

    public function register()
    {
        return $this->view('register');        
    }
    

    public function loginAction()
    {
        $u = new User();
        $check = $u->where('username',$_POST['username'])->get();
        
        var_dump($check);

        if($check && (password_verify($_POST['pass'],$check[0]['pass']))){
            $_SESSION['id'] = $check[0]['id'];
            $_SESSION['level'] = $check[0]['level'];
            echo "logged in";
            header('location:./../');
        }else{
            header('location:./../login.php');
        }

    }
    


    public function logout()
    {
       session_destroy();
       header('location:../');
    }



    public function registerAction()
    {
        $u = new User();
        $u->create([
            'username' => $_POST['username'],
            'pass'  =>  bcrypt($_POST['pass'])
        ]);
           
       header('location:../login.php');

    }

   
}