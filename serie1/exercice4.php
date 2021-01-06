<?php
  $serie = '1';
  $exercice = '4';
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
        <br>
        <h3>Jeu du démineur</h3>
<?php
        $nbLigne = 15;
        $nbColonne = 50;
        $nbMine = 5;
        $mat = array();
        
        for($i = 0;$i <= $nbMine;$i++)
        {
            $nbRandomLigne = random_int(0,$nbLigne);
            $nbRandomColonne = random_int(0,$nbColonne);
        }
        

        for($ligne = 0;$ligne < $nbLigne;$ligne++)
        {
            for($colonne = 0;$colonne < $nbColonne;$colonne++)
            {
                if($colonne == $nbRandomColonne AND $ligne == $nbRandomLigne)
                {
                    echo " * ";
                }
                else
                {
                    echo " . ";
                }
            }
            echo "<br>";
        }
?>  

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
