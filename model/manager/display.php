<?php
class display extends connectDb{


    public function getAll(){

        $query = $this->pdo->prepare("SELECT * FROM moto");
        
        $query->execute();
        $effects =$query->fetchAll();

        var_dump($effects);

        $results = [];

        foreach($effects as $effect){
            $results[] = new geterandseter($effect['id'],$effect['marque'],$effect['modele'],$effect['type'],$effect['image']);
        }
        return $results;

    }
   
    public function getOne(){
        $query = $this->pdo->prepare("SELECT * FROM moto WHERE id = :id");
        
        $query->bindParam(':id', $id);
        $query->execute();
        $eff = $query->fetch();

        echo $eff;

       /* $geterandseter = null;
        if($effect){
            $geterandseter = new geterandseter($effect['id'], $effect['marque'],$effect['model'],$effect['énergie'], $effect['description'],$effect['picture']);
        }
        return  $geterandseter;*/
    }
    
}




?>
