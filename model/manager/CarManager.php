<?php

class CarManager extends DbManager{

    public function getAll(){
        $query = $this->pdo->prepare(" SELECT * FROM car "); 
        $query->execute();
        $results =$query->fetchAll();
        
        $cars = [];
        foreach($results as $car){
            $cars[] = new Car($car['id'], $car['marque'], $car['modele'],$car['energy'],$car['is_auto'], $car['image']);
        }
        return $cars;
        
    }

    public function getOne($id){
        $query = $this->pdo->prepare("SELECT * FROM car WHERE id = :id");
        $query->bindParam("id", $id);
        $query->execute();
        $result = $query->fetch();

        $car = null;

        if($result){
            $car = new Car($result["id"], $result["marque"], $result["modele"],$result["energy"], $result["is_auto"],$result["image"]);
        }
        return $car;
    }

    public function delete($car){
        $id = $car->getId();
        $query = $this->pdo->prepare('DELETE FROM car WHERE id= :id');
        $query->bindParam("id", $id);
        $query->execute();

    }
    
    public function add($car){
        $marque = $car->getMarque();
        $modele = $car->getModele();
        $energy = $car->getEnergy();
        $isAuto = $car->getIsAuto();
        $image = $car->getImage();
        $query = $this->pdo->prepare("INSERT INTO car(marque, modele, energy, is_auto, image) VALUES(:marque, :modele, :energy, :is_auto, :image)");
        $query->bindParam("marque", $marque);
        $query->bindParam("modele", $modele);
        $query->bindParam("energy", $energy);
        $query->bindParam("is_auto", $isAuto);
        $query->bindParam("image", $image);
        $query->execute();
    }
}

?>