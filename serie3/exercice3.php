<?php
  $serie = '3';
  $exercice = '3';  
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title><?php echo "Série $serie - Exercice $exercice"; ?></title>
  </head>
  <body>
    <?php 
    include('../template/header.php');
    ?>
    
    <div class="container">
        <div class="row">
            <div class="col-sm">
            </div>
            <div class="col-sm">
            <h1><?php echo "Série $serie - Exercice $exercice"; ?></h1>
            </div>
            <div class="col-sm">
            </div>
        </div>
        <h3>Formulaire d'inscription</h3>
        <p>Merci d'avoir choisi de vous joindre au club des MIAGISTES. Pour s'inscrire, veuillez remplir le formulaire suivant</p> 
        <form action="" method="post">
            <div class="row">
                <div class="col">
                    <label>Prénom</label>
                    <input type="text" class="form-control" placeholder="Prénom">
                </div>
                <div class="col">
                    <label>Nom</label>
                    <input type="text" class="form-control" placeholder="Nom">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirmation mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="homme">
                <label class="form-check-label" for="inlineRadio1">Homme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="femme">
                <label class="form-check-label" for="inlineRadio2">Femme</label>
            </div>
            <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Votre langage préféré ?</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option selected>Choose...</option>
                    <option value="1">PHP</option>
                    <option value="2">Java</option>
                    <option value="3">Python</option>
                    <option value="3">C</option>
                    <option value="3">Cobol</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Souhaitez-vous recevoir notre newsletter ?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Des commentaires ?</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <br>
            <button type="reset" class="btn btn-primary">Rénitialiser</button>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>