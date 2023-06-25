<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
            <?php require 'view/parts/header.php';?>
            <h1>Meilleurs motos</h1>
            <a href="index.php?controller=default&action=home">Revenir en arrière</a>
        <br>
        <a href="index.php?controller=planet&action=ajout">
            <button class="btn btn-success">Ajouter une moto</button>
        </a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modele</th>
                    <th scope="col">Type</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $results =[];

                foreach ($results as $result){
            ?>
            <tr>
                <th scope="row"><?php echo($result->getId()) ?></th>
                <td><?php echo($result->getMarque()) ?></td>
                <td><?php echo($result->getModele()) ?></td>
                <td><?php echo($result->getType()) ?></td>
                <td><?php echo($result->getImage()) ?></td>
                <td><img style="max-height: 60px" src="image/img/<?php echo($result->getImage()) ?>" alt="une moto"></td>
                
                
            </tr>
            
            <?php
                }
                ?>
            </tbody>
        </table>

        <?php require 'View/parts/footer.php'; ?>

    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>