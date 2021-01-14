<?php
  $serie = '4';
  $exercice = '1';
  include('../template/header.php');
  include('../include/config.php');

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
            <form action="insert.php" method="post">
              <p>Nom<input type="text" name="LastName"></p>
              <p>Prénom<input type="text" name="FirstName"></p>
              <p>Email<input type="text" name="Email"></p>
              <p>Numéro de téléphone<input type="text" name="ContactNumber"></p>
              <p>Adresse<input type="text" name="Address"></p>
              <p><input type="submit" name="insert" value="Insérer"></p>
            </form>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
