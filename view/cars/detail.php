<?php require 'View/parts/header.php'; ?>

         <h1 class="text-center">Detail: <?php echo($car->getModele());?></h1><br >
            <a href="index.php?controller=car&action=list">Retour sur le liste des voitures</a> <br>
         
            <img style="max-height: 200px"  src="<?php echo(is_null($car->getImage())? 'image/img/no-img.jpg':
            'image/img/'.$car->getImage())?>" alt=" image de <?php echo($car->getImage());?>"></td>
           <ul>
               <li><u>Marque: : </u><?php echo ($car->getMarque()); ?></li>
               <li><u>Modele: </u><?php echo ($car->getModele()); ?></li>
                <li><u>Energy: </u><?php echo ($car->getEnergy()); ?></li>
                <li><u>Is-Auto: </u><?php echo($car->getIsAuto()? 'Oui': 'Non')?></li>
                <li></li>
           </ul> 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php require 'View/parts/footer.php'; ?>