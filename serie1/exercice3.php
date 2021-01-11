<?php
  $serie = '1';
  $exercice = '3';
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
      $auteurs = array(
        "0" => "Steinbeck",
        "1" => "Kafka",
        "2" => "Tolkien",
        "3" => "Dickens",
        "4" => "Milton",
        "5" => "Orwell",
      );
      $livres = array(
        "1" => array("titre" => "The Hobbit", "auteurId" => 2, "pubAnnee" => 1937),
        "2" => array("titre" => "The Grapes of Wrath", "auteurId" => 0, "pubAnnee" => 1939),
        "3" => array("titre" => "A Tale of Two Cities", "auteurId" => 3, "pubAnnee" => 1859),
        "4" => array("titre" => "Paradise Lost", "auteurId" => 4, "pubAnnee" => 1667),
        "5" => array("titre" => "Animal Farm", "auteurId" => 5, "pubAnnee" => 1945),
        "6" => array("titre" => "The Trial", "auteurId" => 1, "pubAnnee" => 1925),
      );
    ?>

        <div class="alert alert-primary" role="alert">
          Tableau des auteurs avec leur identifiants
        </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Nom</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        for ($i = 0; $i <= 5; $i++) {
          echo "<tr>
        <th scope=\"row\">{$i}</th>
        <td>{$auteurs[$i]}</td>
        </tr>";
        }
      ?>
      </tbody>
    </table>

    <div class="alert alert-primary" role="alert">
          Tableau des livres
        </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">N°</th>
          <th scope="col">Titre</th>
          <th scope="col">Auteur</th>
          <th scope="col">Année de publication</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        for ($i = 1; $i <= 6; $i++) {
          echo "<tr>
        <th scope=\"row\">{$i}</th>
        <td>{$livres[$i]["titre"]}</td>
        <td>{$auteurs[$livres[$i]["auteurId"]]}</td>
        <td>{$livres[$i]["pubAnnee"]}</td>
        </tr>";
        }
      ?>
      </tbody>
    </table>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
