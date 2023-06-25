<?php

    class connectDb{
        protected $pdo;

        private $host = 'localhost';
        private $dbname = 'kemal-poo';
        private $user = 'root';
        private $password = '';
       

public function __construct(){

        try {    

          
            $this->pdo= new pdo('mysql:dbname='.$this->dbname .';host='.$this->host.';charset=utf8', $this->user, $this->password);

            $this->pdo->setAttribute(pdo::ATTR_ERRMODE, pdo::ERRMODE_EXCEPTION);
            
            
        }
        
        catch(PDOException $e){
            throw $e;
            die();
        }
         
    }
}

?>