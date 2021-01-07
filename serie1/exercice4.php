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
        <div class="card text-center">
          <div class="card-header">
            Jeu du démineur
          </div>
          <div class="card-body">
            <div class="table-responsive-xl">
                <table class="table">
                  <tbody>
                  <tr>
                  <?php
                    $nbLigne = 15;
                    $nbColonne = 15;
                    $nbCases = $nbLigne*$nbColonne;
                    $nbMine = 5;

                    $mines = array();
                    for($i = 1;$i <= $nbMine;$i++)
                    {
                      array_push($mines, random_int(0,$nbCases));
                    }
                    echo("<div class=\"alert alert-primary\" role=\"alert\">
                    Tableau des emplacements des mines:<br>");
                    print_r($mines);
                    echo("</div>");

                    for($j = 1; $j <= $nbCases; $j++){
                      if(is_int($j/$nbColonne+1)){
                        echo("</tr><tr>");
                      } else {
                        if(in_array($j, $mines)){
                          echo("<td><b>X</b></td>");
                        } else {
                          echo("<td>o</td>");
                        }
                      }
                    }
                  ?>  
                  </tbody>
                </table>
              </div>
            <p class="card-text">
            </p>
            
          </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
