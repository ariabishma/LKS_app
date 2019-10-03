<?php
    require '../../init.php';
    use App\Controllers\HomeController;

    $c = new HomeController();
    $c->loginAction();
