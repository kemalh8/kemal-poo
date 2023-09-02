
<?php  

    spl_autoload_register(function($class_Name){
            if(str_ends_with($class_Name,'Controller')){
                    require 'controller/'.$class_Name.".php";
            }
            
            else if(str_ends_with($class_Name,'Manager')){
                require 'model/manager/'.$class_Name.'.php';
            }
            else{
                require 'model/class/'.$class_Name.'.php';
            }

    })
?>
