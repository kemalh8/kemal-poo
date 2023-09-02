<?php require 'View/parts/header.php'; ?>
    <div class="container">
        <p></p>
        <div class="text-center"><h1>Listes des voitures</h1></div>
             

            <a href="index.php?controller=default&action=home">Revenir en arrière</a><br/>
        <br>
        <a href="index.php?controller=car&action=add">
            <button class="btn btn-success">Ajouter une voiture</button>
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modele</th>
                    <th scope="col">Energy</th>
                    <th scope="col">IsAuto</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>

            <tbody>
                <?php

                    foreach ($cars as $car){
                ?>
                    <tr>
                        <th scope="row"><?php echo($car->getId()) ?></th>
                        <td><?php echo($car->getMarque()) ?></td>
                        <td><?php echo($car->getModele()) ?></td>
                        <td><?php echo($car->getEnergy()) ?></td>
                        <td><?php echo($car->getIsAuto()? 'oui': 'non') ?></td>
                     <!--   <td><?php echo($car->getImage()) ?></td>-->
                        <td>
                            <img style="max-height: 100px" src="<?php echo(is_null($car->getImage())? 'image/img/no-img.jpg':
                            'image/img/'.$car->getImage())?>" alt=" image de <?php echo($car->getImage());?>"></td>
                        <td>
                             <a href="index.php?controller=car&action=detail&id=<?php echo($car->getId());?>">Voir la <?php echo($car->getModele());?></a><br>                        
                             <a href="index.php?controller=car&action=delete&id=<?php echo($car->getId());?>">Supprimer la <?php echo($car->getModele());?></a>                        
                            </td>
                </tr>
                
                <?php
                    }
                ?>

            </tbody>
        </table>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php require 'View/parts/footer.php'; ?>