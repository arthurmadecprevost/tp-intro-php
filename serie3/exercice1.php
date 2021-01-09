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
        $trouve = false;
        $fin = false;
        if(!isset($_SESSION['nombre_mystere'])) // Vérifie si la session n'existe pas
        {      
            $_SESSION['nbEssai'] = 0;
            $_SESSION['borneInf'] = 1;
            $_SESSION['borneSup'] = 100;
            $_SESSION['nombre_mystere'] = random_int($_SESSION['borneInf'],$_SESSION['borneSup']); // Si elle n'existe pas, on la crée et on lui donne comme valeur un nombre au hasard.
        }
        else if(!empty($_POST['num']))
        {
            $num = $_POST['num'];
            if($num > $_SESSION['nombre_mystere'])
            {
                $_SESSION['borneSup'] = $num;
                echo "C'est plus petit, essayez entre " . $_SESSION['borneInf'] . " et " . $_SESSION['borneSup'] ."<br>";  
            }
            else if($num < $_SESSION['nombre_mystere'])
            {
                $_SESSION['borneInf'] = $num; 
                echo "C'est plus grand, essayez entre " . $_SESSION['borneInf'] . " et " . $_SESSION['borneSup'] ."<br>";
            }
            else if($_SESSION['nbEssai'] >= 10)
            {
                $fin = true;
            }
            else
            {
                $trouve = true;
                $fin = true;
            } 
            $_SESSION['nbEssai']++;
        }
        else
        {
            echo "Veuilez saisir une valeur valide <br>";
        }   
        if(!$fin)
        {
            $nbEssai = 10 - $_SESSION['nbEssai'];
            echo "Il vous reste " . $nbEssai . " essais. <br>";
?>
            <br>
            <form action="" method="post">
                <p>Quelle est ta proposition ? <input id="number" type="number" min="1" max="100" required></p>
                <input type="hidden" name="nbTentatives" value="<?php echo $_SESSION['nbEssai']; ?>" />
                <p><input type="submit" name="deviner" value="Deviner"></p>
            </form>    
<?php
        }
        else
        {
            if($trouve)
            {
                echo "Vous avez gagné en " . $_SESSION['nbEssai'] . " essais.<br>";
            }
            else
            {
                echo "Vous avez perdu, le nombre était : " . $_SESSION['nombre_mystere'];
            }
            session_destroy();
        }
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>