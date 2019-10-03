
    <?php $this->Component('header'); ?>
    
    <div class="container">
        <div class="row justify-content-center">
           
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Login</h2>
                        <hr>
                        <form method="POST" action="./action/login.php">
                            <input name="username" type="username" class="form-control" placeholder="Username">
                            <input name="pass" type="password" class="form-control mt-3" placeholder="Password">
                            <button type="submit" class="btn btn-primary float-right mt-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->Component('footer'); ?>
