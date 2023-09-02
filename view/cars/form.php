<?php require 'View/parts/header.php'; ?>

        <h1> Ajouter une voiture</h1><br>
        <a href="index.php?controller=car&action=list">Retour sur le liste des voitures</a> <br>
         
        <form method="post" enctype="multipart/form-data">
            <div class="col-md-12 mt-2">
                    <label for="marque">Marque</label>
                    <input class="form-control 
                    <?php if(array_key_exists("marque", $errors)){echo('is-invalid');}?>"
                       value=" <?php if(array_key_exists("marque", $_POST)){echo($_POST["marque"]);}?>"
                        type="text" name="marque" id="marque" >

                    <div class="invalid-feedback">
                        <?php 
                            if(array_key_exists("marque", $errors)){
                                echo($errors["marque"]);
                            }
                        ?>
                    </div>
            </div>
            //
            <div class="col-md-12 mt-2">
                    <label for="modele">Model</label>
                    <input class="form-control 
                    <?php if(array_key_exists("modele", $errors)){echo('is-invalid');}?>"
                       value=" <?php if(array_key_exists("modele", $_POST)){echo($_POST["modele"]);}?>"
                        type="text" name="modele" id="modele" >

                    <div class="invalid-feedback">
                        <?php 
                            if(array_key_exists("modele", $errors)){
                                echo($errors["modele"]);
                            }
                        ?>
                    </div>
            </div>

            <div class="col-md-12 mt-2">
                <label for="energy">Energy</label>
                <select class="form-select" id="energy" name="energy">
                    <?php if(array_key_exists("energy", $errors)){echo('is-invalid');}?>"

                    <?php 
                        foreach(CarController::$energies as $energy){
                            echo('<option value="'.$energy.'">'.$energy.'</option>');
                        }
                    ?>
                </select>
                <div class="invalid-feedback">
                        <?php 
                            if(array_key_exists("energy", $errors)){
                                echo($errors["energy"]);
                            }
                        ?>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                <label>Cette voiture a une boite automathique ?</label><br>
                    <label class="form-check-label" for="isAuto1" >Oui</label>
                    <input class="form-check-input
                        <?php 
                            if(array_key_exists("isAuto", $errors)){echo('is-invalid');}

                        ?>"
                        type="radio" name="isAuto" id="isAuto1" 
                            <?php if(array_key_exists("isAuto", $_POST) && $_POST["isAuto"] == 1){echo('checked');}?> 
                            value="1">
                    
                    <label class="form-check-label" for="isAuto2" >Non</label>
                    <input class="form-check-input 
                    <?php 
                            if(array_key_exists("isAuto", $errors)){echo('is-invalid');}

                        ?>" 
                    type="radio" name="isAuto" id="isAuto2"
                    <?php if(array_key_exists("isAuto", $_POST) && $_POST["isAuto"] == 0){echo('checked');}?> 
                        value="0">

                    <div class="invalid-feedback">
                        <?php 
                            if(array_key_exists("isAuto", $errors)){
                                echo($errors["isAuto"]);
                            }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-2">
                    <label for="image">Photo de voiture</label>
                    <input class="form-control
                         <?php 
                            if(array_key_exists("image", $errors)){echo('is-invalid');}

                        ?>" 
                        type="file" id="image" name="image">
                    
                    <div class="invalid-feedback">
                        <?php 
                            if(array_key_exists("image", $errors)){
                                echo($errors["image"]);
                            }
                        ?>
                    </div>
            </div>
            <input class="btn btn-success mt-2" type="submit">
        </form>
            
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php require 'View/parts/footer.php'; ?>