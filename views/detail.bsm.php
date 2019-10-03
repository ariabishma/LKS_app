
    <?php $this->Component('header'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                         <img src="http://images.squarespace-cdn.com/content/v1/5aa83bad9772ae97813540d0/1546342351907-4R2L1N4GITARI03VU9N0/ke17ZwdGBToddI8pDm48kJPo64LO3YZG-4f-ST8EfI9Zw-zPPgdn4jUwVcJE1ZvWEtT5uBSRWt4vQZAgTJucoTqqXjS3CfNDSuuf31e0tVGunbRojLjYM_qWg5xABZ5ZcuB4bj617U7w2cj588VrBRur-lC0WofN0YB1wFg-ZW0/cover_UC95Q8VU77.png" class="w-100" alt="">
                        <a href="./action/destroy.php?id=<?= $book[0]['id']?>" class="btn btn-block btn-danger">Destroy</a>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
            
            <h2><?= $book[0]['title'] ?></h2>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus totam dolorem perspiciatis reiciendis. Maiores atque est veritatis rerum eaque, tempora accusamus qui recusandae obcaecati. Et ex laboriosam quos ipsam eius.</p>
            </div>
        </div>
    </div>

    <?php $this->Component('footer'); ?>
