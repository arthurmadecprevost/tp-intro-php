<?php
  $serie = '3';
  $exercice = '1';  
  session_start(); //On créé une session qui va permettre de stocker le nbMystere
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
        $trouve = false;
        if(!isset($_SESSION['nombre_mystere']) AND !isset($_SESSION['nbEssai'])) // Vérifie si la session n'existe pas
        {      
            $_SESSION['nbEssai'] = 10;
            $_SESSION['nombre_mystere'] = random_int($borneInf,$borneSup); // Si elle n'existe pas, on la crée et on lui donne comme valeur un nombre au hasard.
        }
        if($_SESSION['nbEssai'] != 0)
        {   
?>
        <br>
        <form action="" method="post">
            <p>Quelle est ta proposition ? <input type="text" name="num" /></p>
            <input type="hidden" name="nbTentatives" value="<?php echo $_SESSION['nbEssai']; ?>" />
            <p><input type="submit" name="deviner" value="Deviner"></p>
        </form>    
<?php
        }
        if(isset($_POST['num']))
        {    
            $nbEssai = (!empty($_POST["nbEssai"])) ? (int) $_POST["nbEssai"] : 10;
            $nbEssai--;
            $num = $_POST['num'];
            echo "Il vous reste " . $_SESSION['nbEssai'] . " essais. <br>";
            echo $_SESSION['nombre_mystere'];
            if($num > $_SESSION['nombre_mystere'])
            {
                $borneSup = $num;
                echo "C'est plus petit, essayez entre " . $borneInf . " et " . $borneSup ."<br>";  
            }
            else if($num < $_SESSION['nombre_mystere'])
            {
                $borneInf = $num; 
                echo "C'est plus grand, essayez entre " . $borneInf . " et " . $borneSup ."<br>";
            }
            else
            {
                echo "Vous avez gagné en " . $_SESSION['nbEssai'] . " essais.<br>";
                $_SESSION['nbEssai'] = 0; 
                $trouve = true;
                session_destroy();
            } 
        }
        if($_SESSION['nbEssai'] = 0 AND !$trouve)
        {
            echo "Vous avez perdu, le nombre était : " . $_SESSION['nombre_mystere'];
            session_destroy();
        }
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>