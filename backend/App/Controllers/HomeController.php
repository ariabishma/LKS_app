<?php
namespace App\Controllers;

use Core\Controller\BaseController;
use App\User;

class HomeController extends BaseController{
   
    public function __construct()
    {
        $this->Middleware('\App\Middleware\Authenticate','bishma');
        // $this->Middleware('\App\Middleware\Authenticate','pengguna');
    } 

    public function index()
    {
        $model = new User();
        $data =  $model->all()->get();
        
        return $this->view('home',['nama'=>'bishma','data'=>$data]);
    }

    public function store()
    {
        $user = new User();
        $user->create([
            'username' => 'aria bishma fauzan',
            'pass' => '123pass'
        ]);
        return header('location:../');
    }
}