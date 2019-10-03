
    <?php $this->Component('header'); ?>
    
    
    <h1>HEllo WOrld </h1>

    
    <?php
        foreach ($data as  $value) {
            echo $value['username']."</br>";
        }
    ?>


    <?php $this->Component('footer'); ?>
