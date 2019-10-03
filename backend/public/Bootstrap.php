<?php
    require '../index.php';
    use App\Controllers\HomeController;

    $c = new HomeController();
    $c->index();
