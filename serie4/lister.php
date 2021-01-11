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
        </div>
        <button type="button" class="btn btn-success">
        <i class="bi bi-person-plus-fill"></i>
                Ajouter un utilisateur
              </button>

<table class="table table-striped">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Adresse</th>
      <th scope="col">Date d'inscription</th>
      <th scope="col">Éditer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>

  <?php
            try {

            $stmt = $conn->prepare('SELECT * FROM users');

            //$stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            
            $result = $stmt->fetchAll();
            
            if ( count($result) ) {
                foreach($result as $row) {
                    $id = $row[0];
                    $prenom = $row[1];
                    $nom = $row[2];
                    $email = $row[3];
                    $contact = $row[4];
                    $adresse = $row[5];
                    $dateInscription = $row[6];

                    echo("<tr>
                    <th scope=\"row\">$id</th>
                    <td>$prenom</td>
                    <td>$nom</td>
                    <td>$email</td>
                    <td>$contact</td>
                    <td>$adresse</td>
                    <td>$dateInscription</td>
                    <td><button type=\"button\" class=\"btn btn-primary\">
                    <i class=\"bi bi-pencil-fill\"></i>
                  </button></td>
                    <td><button type=\"button\" class=\"btn btn-danger\">
                    <i class=\"bi bi-trash-fill\"></i>
                    <span class=\"visually-hidden\">Button</span>
                  </button></td>
                  </tr>");
                //print_r($row);
                }
            } else {
                echo "No rows returned.";
            }
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
        ?>
  </tbody>

  </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
