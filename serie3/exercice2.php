<?php
  if(isset($_POST['search'])) {
    switch($_POST['site']) {
      case 'french':
            header('location: http://amazon.fr/');
      exit;

      case 'com':
            header('location: http://amazon.com/');
      exit;

      case 'uk':
            header('location: http://amazon.co.uk');
      exit;
      default:
            header('location: serie_3_exo_2.php');
      exit;
    }
  }
  $serie = '3';
  $exercice = '2';
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
        <form action="" method="post">
            <p>Choisir votre magasin</p>
            <select name="site" id="site-select">
                <option value="">--Please choose an option--</option>
                <option value="com">amazon.com</option>
                <option value="french">amazon.fr</option>
                <option value="uk">amazon.co.uk</option>
            </select>
            <p><input type="submit" name="search" value="Visiter le magasin"></p>
        </form>          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>