
    <?php $this->Component('header'); ?>
    
    <div class="jumbotron">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                  <h1>E-Library APP</h1>
                  <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, deleniti recusandae minus itaque doloribus architecto! Tempora nisi excepturi, porro modi odit delectus? Est ullam deleniti nihil saepe labore, consectetur unde.</p>
                    <a href="" class="btn btn-primary shadow btn-block btn-lg">Find Relevant Books</a>
                </div>
            </div>
         </div>
    </div>

    <div class="container">
        <h3>Our Collections</h3>
        
        <hr>
        <div class="row">
             <?php 
             foreach ($books as $value) {
                 $this->Component('card',['v'=>$value , 'title'=>$value['title'],'publisher' => 'Bishma Publisher']);
            }
            ?>
        </div>
    </div>


    <?php $this->Component('footer'); ?>
