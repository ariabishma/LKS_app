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
        $book_m = new \App\Book();
        $books = $book_m->all()->get();
        
        return $this->view('home',['nama'=>'bishma','data'=>$data,'books'=>$books]);
    }

    public function detail()
    {

        $book_m = new \App\Book();
        $book = $book_m->find($_GET['id'])->get();
        
        return $this->view('detail',['book'=>$book]);
    }

    public function login()
    {
        
        return $this->view('login');
    }

    public function loginAction()
    {
        $u = new User();
        $check = $u->where('username',$_POST['username'])->where('pass',$_POST['pass'])->get();
        
        var_dump($check);
        // var_dump($_POST);

        if($check){
            $_SESSION['id'] = $check[0]['id'];
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
    

    public function add()
    {
        
        return $this->view('add');
    }



    public function store()
    {
        $book = new \App\Book();
        $book->create([
            'title' => $_POST['title'],
            'qty' => $_POST['qty']
        ]);
        return header('location:../');
    }


    public function destroy()
    {
        $book = new \App\Book();
        $book->destroy($_GET['id']);
        
        return header('location:../');
    }
}