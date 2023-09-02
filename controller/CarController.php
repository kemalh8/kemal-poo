
<?php

class CarController{

    private $carManager;

    public static $energies = [
            'Essence',
            'Electrique',
            'Diesel',
            'Hybride'
    ];

    public static $allowedFile = [
        'image/jpg',
        'image/png'
    ];

    public function __construct(){

          $this->carManager = new CarManager();
    }

    public function list(){
        $cars = $this->carManager->getAll();

        require 'view/cars/list.php';
    }

    public function detail($id){
        $car = $this->carManager->getOne($id);

        if(is_null($car)){
            header("location: index.php?controller=default&action=not-found");
            die();
        }

        require 'view/cars/detail.php';
    }

    public function delete($id){
        $car = $this->carManager->getOne($id);

        if(is_null($car)){
            header("location: index.php?controller=default&action=not-found");
            die();
        }
        $this->carManager->delete($car);
        header("location: index.php?controller=car&action=list");

    }

    public function ajout(){
        $errors = [];
        if($_SERVER["REQUEST_METHOD"] == "POST"){
             // Je vérifie si un marque est saisi
             if(empty($_POST["marque"])){
                $errors["marque"] = 'veuillez saisir un marque';
            }
            // je vérifie que marque ne fait pas plus de 250 caractères
            if(strlen($_POST["marque"]) > 255){
                $errors["marque"] = 'Veuillez choisir un marque';
            }
           
            // Je vérifie si un model est saisi
            if(empty($_POST["modele"])){
                $errors["modele"] = 'veuillez saisir un model';
            }
            // je vérifie que mon modele ne fait pas plus de 250 caractères
            if(strlen($_POST["modele"]) > 255){
                $errors["modele"] = 'Veuillez choisir un modele';
            }
            // je vérifie qu'une energie est saisie
            // je vérifie que l'energie saisie est dans la liste
            if(!in_array($_POST["energy"], self::$energies)){
                $errors["energy"] = 'veuillez choisir une ernergie disponible';
            }
            //je vérifie que j'ai renseigné si la voiture
            if(!array_key_exists("isAuto", $_POST)){
                $errors["isAuto"] = 'veuillez indiquer le type de boite de l\'auto svp ?';

            }else{
                if($_POST["isAuto"] != "1" && $_POST["isAuto"] != "0"){
                    $errors["isAuto"] = 'veuillez indiquer le type de boite de l\'auto svp ?';
                 }
            }

            if(count($errors) == 0){
                $car = new Car(null, $_POST["marque"], $_POST["modele"], $_POST["energy"], $_POST["isAuto"], null);

                if($_FILES["image"]["error"] != 4){
                    if(!in_array($_FILES["image"]['type'], self::$allowedFile)){
                            $errors["image"] = 'Nous acceptons seulement les JPG/PNG';
                    }
                    if($_FILES["image"]['error'] !=0){
                        $errors["image"] = 'Une erreur s\'est produite pendant l\'upload'; //??????????
                    } 
                    if($_FILES["image"]['size'] > 2000000){
                        $errors["image"] = 'l\'image est trop lourde. elle doit faire moins de 2Mo';
                    }
                    if(count($errors)== 0){
                        $filename = uniqid().explode("/",$_FILES["image"]['type'])[1]; // à revoir kemal
                        move_uploaded_file($_FILES["image"]['tmp_name'], 'image/img/'.$filename);
                        $car->setImage($filename);
                    }
                    /*if (count($errors) == 0) {
                        $filename = uniqid() . '.' . pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
                        move_uploaded_file($_FILES["image"]["tmp_name"], 'image/img/' . $filename);
                        $car->setImage($filename);
                    }*/

                }
                if(count($errors)== 0){
                    $this->carManager->add($car);
                    header("location: index.php?controller=car&action=list");
                    die();
                }
            }

        }
        require 'view/cars/form.php';

    }
}


?>