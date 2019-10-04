<?php
    require '../../init.php';
    use App\Controllers\HomeController;

    $c = new HomeController();
    $c->Middleware('\App\Middleware\AuthLogin');
    $c->Middleware('\App\Middleware\CekLevel','admin');
    $c->destroy();
