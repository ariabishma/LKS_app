<?php
namespace App\Controllers;
use Core\Controller\BaseController;

class HomeController extends BaseController{
   
    public function __construct()
    {
        $this->Middleware('\App\Middleware\Authenticate','bishma');
        // $this->Middleware('\App\Middleware\Authenticate','penggunga');
    } 

    public function index()
    {
        return $this->view('home',['nama'=>'bishma']);
    }
}