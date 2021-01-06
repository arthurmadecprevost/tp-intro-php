<?php
  $serie = '1';
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
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Premier ?</th>
                <th scope="col">Pair ou impair ?</th>
                </tr>
            </thead>
<?php     
          for($i = 1;$i < 11;$i++)
          {
              if($i % 2 == 0)
              {
                  $pair_impair = 'pair';
              }
              else
              {
                  $pair_impair = 'impair';
              }
              $nbDiv = 0;//Et on compte le nombre de diviseur    
              for($j=1;$j<=$i;$j++){
                  if($i%$j==0){
                      $nbDiv++;            
                  }
              }
              if($nbDiv == 2)
              {
                  $premier = 'Oui';
              }   
              else
              {
                  $premier = 'Non';
              }
?>
              <tbody>
                  <tr>
                  <td><?= $i ?></td>
                  <td><?= $premier ?></td>
                  <td><?= $pair_impair ?></td>
                  </tr>
              </tbody>
<?php
}
?>
        </table>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
