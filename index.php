
<?php
        require 'autoload.php';

    if(!array_key_exists("controller", $_GET) &&
        !array_key_exists("action", $_GET)){
       header('Location: index.php?controller=default&action=home');
    }
    // si je n'ai pas de clé controller dans mes variables $GET 
     // ou que je n'ai pas actions dans mes variables $GET, 
    
   /* if(!array_key_exists("controller", $_GET) ||
        !array_key_exists("action", $_GET)){
            header("location: index.php?controller=car&action=list");
        }*/
    
    //si mon controller = default et si mon action = home
    if($_GET["controller"] == 'default'){
        $controller = new DefaultController();
        if($_GET["action"] == 'home'){
            //$actionFind = true;
            $controller->home(); 
        }
    }

    //$actionFind = null;
    if($_GET["controller"] == 'default'){
        $controller = new DefaultController();
        if($_GET["action"] == "not-found"){
            //$actionFind = true;
            $controller->notFound(); 
        }
    } 
    //si mon controller = car et si mon action = list
    if($_GET["controller"] == 'car'){
        $controller = new CarController();
        if($_GET["action"] == 'list'){
           // $actionFind = true;
            $controller->list(); 
        }
    }

    if($_GET["action"] == 'detail' &&
        array_key_exists("id", $_GET)){
           // $actionFind = true;
        $controller->detail($_GET["id"]);
    }

    if($_GET["action"] == 'delete' &&
    array_key_exists("id", $_GET)){
       // $actionFind = true;
    $controller->delete($_GET["id"]);  
    }

    if($_GET["action"] == "add"){
       // $actionFind = true;
        $controller->ajout();
    }

    /*if(is_null($actionFind)){
        header("location: index.php?controller=default&action=not-found");
        die();
    }*/

    $object = new CarManager(); 
    $object->getAll();

?>

<?php 
require 'view/parts/footer.php';
?>