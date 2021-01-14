<?php
  $serie = '3';
  $exercice = "3-1";  
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
    if(isset($_POST['valider']))
    {
?>
    <br>
    <h3>Merci</h3>
    <p>Merci pour avoir rempli le formulaire d'inscription. Voici un résumé des informations saisies : </p> 
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Prénom</th>
                <td><?= $_POST['first_name'] ?></td>
            </tr> 
            <tr>
                <th>Nom</th>
                <td><?= $_POST['last_name'] ?></td>
            </tr> 
            <tr>
                <th>Mot de passe</th>
                <td><?= $_POST['password'] ?></td>
            </tr> 
            <tr>
                <th>Confirmation mot de passe</th>
                <td><?= $_POST['confirm_password'] ?></td>
            </tr> 
            <tr>
                <th>Genre</th>
                <td><?= $_POST['genre'] ?></td>
            </tr> 
            <tr>
                <th>Langage favori</th>
                <td><?= $_POST['language'] ?></td>
            </tr> 
            <tr>
                <th>Souhaitez-vous recevoir notre newsletter ?</th>
<?php
            if(!empty($_POST['newsletter']))
            {
?>
                <td><?= $_POST['newsletter'] ?></td>
<?php       
            } 
            else
            {
?>
                <td>no</td>
            </tr>

<?php       } ?>
            <tr>
                <th>Commentaires</th>
<?php
        if(!empty($_POST['comments']))
        {
?>
                <td><?= $_POST['comments'] ?></td>
            </tr> 
<?php   } 
        else
        {
?>
                <td>No comments</td>
            </tr>

<?php   } ?>

        </tbody>
    </table>

<?php  
    }
    else
    {
?>        
        <h3>Formulaire d'inscription</h3>
        <p>Merci d'avoir choisi de vous joindre au club des MIAGISTES. Pour s'inscrire, veuillez remplir le formulaire suivant</p> 
        <form action="" method="post">
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
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirmation mot de passe</label>
                <input type="password" class="form-control" name="confirm_password" placeholder="Password" required>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio1" value="homme" required> 
                <label class="form-check-label" for="inlineRadio1">Homme</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="genre" id="inlineRadio2" value="femme" required>
                <label class="form-check-label" for="inlineRadio2">Femme</label>
            </div>
            <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="mr-sm-2" for="inlineFormCustomSelect">Votre langage préféré ?</label>
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="language" required>
                    <option value="php">PHP</option>
                    <option value="java">Java</option>
                    <option value="python">Python</option>
                    <option value="c">C</option>
                    <option value="cobol">Cobol</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Souhaitez-vous recevoir notre newsletter ?</div>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="yes" name="newsletter" id="gridCheck1">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Des commentaires ?</label>
                <textarea class="form-control" name="comments" rows="3"></textarea>
            </div>
            <br>
            <button type="reset" class="btn btn-primary">Rénitialiser</button>
            <button type="submit" name="valider" class="btn btn-primary">Envoyer</button>
        </form>
<?php  
    }
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>