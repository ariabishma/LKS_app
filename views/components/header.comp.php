<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<style>
    .nav-link{
        font-weight:bold;
        cursor:pointer;
    }
</style>
<nav class="navbar navbar-expand mb-2 shadow">
    <div class="container">
        <a href="./" class="navbar-brand">PERPUSTAKAAN LKS</a>

        <ul class="navbar-nav">
            <li class="nav-link">Home</li>

            <?php if(isLogin()): ?>
                <a href="./add.php"><li class="nav-link">Add Book</li></a>
                 <a href="./action/logout.php"><li class="nav-link">Logout (<?= loginUser()['username'] ?>)</li></a>
            <?php endif; ?>

            <?php if(!isLogin()): ?>
                 <a href="./login.php"><li class="nav-link">Login</li></a>
            <?php endif; ?>
        </ul>
    </div>
</nav>