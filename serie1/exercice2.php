<?php
  $serie = '1';
  $exercice = '2';
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
        <div class="alert alert-primary" role="alert">
        Écrire un script qui affiche le nombre de jours des mois de l’année en cours.
        </div>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">N° du mois</th>
              <th scope="col">Mois</th>
              <th scope="col">Nombre de jours</th>
              <th scope="col">Année en cours</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $currentYear = date("Y"); 
            for ($i = 1; $i <= 12; $i++) {
              $dateObj   = DateTime::createFromFormat('!m', $i);
              $monthName = $dateObj->format('F'); // Mois
              $number = cal_days_in_month(CAL_GREGORIAN, $i, $currentYear); // 31
              echo "<tr>
              <td>$i</td>
              <td>$monthName</td>
              <th scope=\"row\">$number</th>
              <td>$currentYear</td>
            </tr>";
            }
          ?>
          </tbody>
        </table>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
