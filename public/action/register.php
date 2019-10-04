<?php
    require '../../init.php';
    use App\Controllers\Auth\AuthenticateUser;

    $c = new AuthenticateUser();
    $c->registerAction();
