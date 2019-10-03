
    <?php $this->Component('header'); ?>
    
    <div class="container">
        <div class="row justify-content-center">
           
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Tambah Buku</h2>
                        <hr>
                        <form method="POST" action="./action/store.php">
                            <input name="title" type="text" class="form-control" placeholder="Title">
                            <input name="qty" type="text" class="form-control mt-3" placeholder="Quantity">
                            <button type="submit" class="btn btn-primary float-right mt-4">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $this->Component('footer'); ?>
