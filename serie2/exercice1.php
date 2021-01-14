<?php
  $serie = '2';
  $exercice = '1';
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
        

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titre</th>
          <th scope="col">Auteur</th>
          <th scope="col">Année de publication</th>
        </tr>
      </thead>
      <?php
          function tableau($array)
          {
              $title = $array[0];
              $author = $array[1];
              $pubAnnee = $array[2];
              return ("
              <tbody>
                <tr>
                  <th scope=\"row\">$title</th>
                  <td>$author</td>
                  <td>$pubAnnee</td>
                </tr>
              </tbody>");
          }
          $tab = array(
            "0" => "The Hobbit", "1" => "Tolkien", "2" => 1937
          );
          echo(tableau($tab));
        ?>
    </table>

    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
