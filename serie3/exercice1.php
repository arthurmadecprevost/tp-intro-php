<?php
  $serie = '3';
  $exercice = '1';
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
<?php
        $borneInf = 1;
        $borneSup = 100;
        $nbEssai = 10;
        $nbMystere = random_int($borneInf,$borneSup); 
?>
        <br>
        <form action="" method="post">
            <p>Quelle est ta proposition ? <input type="text" name="num" /></p>
            <p><input type="submit" name="deviner" value="Deviner"></p>
        </form>    
<?php
        do{       
            if(isset($_POST['num']))
            {    
                $num = $_POST['num'];
                if($num > $nbMystere)
                {
                    echo "C'est plus petit, essayez entre " . $borneInf . " et " . $borneSup ."<br>";
                    $borneSup = $num;
                    $nbEssai--;    
                }
                else if($num < $nbMystere)
                {
                    echo "C'est plus grand, essayez entre " . $borneInf . " et " . $borneSup ."<br>";
                    $borneInf = $num;
                    $nbEssai--;    
                }
                else
                {
                    echo "Vous avez gagné en " . $nbEssai . " essais.<br>";
                    $nbEssai = 0; 
                } 
            }
        }while($nbEssai != 0);
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>