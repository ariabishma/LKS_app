<?php

spl_autoload_register(function($class){
    
    $c = explode('\\',$class);
    $path = join(DIRECTORY_SEPARATOR, $c);
    
    require BASE_DIR."/".$path.".php";
});

