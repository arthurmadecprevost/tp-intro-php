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
        <h3>Formulaire d'inscription</h3>
        <p>Merci d'avoir choisi de vous joindre au club des MIAGISTES. Pour s'inscrire, veuillez remplir le formulaire suivant</p> 
        <form action="insert.php" method="post">
            <div class="row">
                <div class="col">
                    <label>Prénom</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Prénom" required>
                </div>
                <div class="col">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Nom" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Prénom" required>
                </div>
                <div class="col">
                    <label>Numéro de téléphone</label>
                    <input type="text" class="form-control" name="contactnumber" placeholder="Nom" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Adresse</label>
                <textarea class="form-control" name="address" rows="3"></textarea>
            </div>
            <br>
            <button type="reset" class="btn btn-primary">Rénitialiser</button>
            <button type="submit" name="insert" class="btn btn-primary">Envoyer</button>
        </form>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
