
<?php  

    spl_autoload_register(function($className){
        if(str_ends_with($className, 'controller')){
                require 'controller/'.$className.'.php';
        }
    }
    )
?>