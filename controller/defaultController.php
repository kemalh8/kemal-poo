<?php 

    class DefaultController{


        public function __construct(){        

        }

        public function home(){

            require 'view/home.php';
        }

        public function notFound(){
            http_response_code(404);
            require 'view/errors/404.php';
        }
    } 

?>

