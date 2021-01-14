<?php
  $serie = '3';
  $exercice = '3-2';  
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
        if ($_GET['etape'] == 1 || !isset($_GET['etape']))
        {
?>      
        <h3>Inscription : Etape 1</h3><br>
        <form action="exercice3-3.php?etape=2" method="post">
            <div class="row">
                <div class="col">
                    <label>Prénom</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Prénom" required>
                </div>
                <div class="col">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Prénom" required>
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
            <br>
            <button type="submit" name="suivant" class="btn btn-primary">Suivant</button>
        </form>
<?php              
        }
        elseif ($_GET['etape'] == 2)
        {
?>
        <h3>Inscription : Etape 2</h3><br>
        <form action="exercice3-3.php?etape=3" method="post">
            <input name="first_name" type="hidden" value="<?= $_POST['first_name']; ?>">
            <input name="last_name" type="hidden" value="<?= $_POST['last_name']; ?>">
            <input name="password" type="hidden" value="<?= $_POST['password']; ?>">
            <input name="confirm_password" type="hidden" value="<?= $_POST['confirm_password']; ?>">
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
            <br>
            <a href="exercice3-3.php?etape=1"><button type="button" name="retour" class="btn btn-primary">Retour</button></a>
            <button type="submit" name="suivant" class="btn btn-primary">Suivant</button>
        </form>
<?php
        }
        elseif ($_GET['etape'] == 3)
        {
?>
        <h3>Inscription : Etape 3</h3><br>
        <form action="exercice3-3.php?etape=fini" method="post">
            <input name="first_name" type="hidden" value="<?= $_POST['first_name']; ?>">
            <input name="last_name" type="hidden" value="<?= $_POST['last_name']; ?>">
            <input name="password" type="hidden" value="<?= $_POST['password']; ?>">
            <input name="confirm_password" type="hidden" value="<?= $_POST['confirm_password']; ?>">
            <input name="genre" type="hidden" value="<?= $_POST['genre']; ?>">
            <input name="language" type="hidden" value="<?= $_POST['language']; ?>">
            <div class="form-group row">
                <label class="col-sm-2">Souhaitez-vous recevoir notre newsletter ?</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="newsletter" id="gridCheck1" value="yes">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Des commentaires ?</label>
                <textarea class="form-control" name="comments" rows="3"></textarea>
            </div>
            <br>
            <a href="exercice3-3.php?etape=2"><button type="button" name="retour" class="btn btn-primary">Retour</button></a>
            <button type="submit" name="valider" class="btn btn-primary">Envoyer</button>
        </form>
<?php  
        }
        elseif ($_GET['etape'] == "fini") 
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
            echo "<td>" . $_POST['newsletter'] . "</td> 
            </tr>";  
        } 
        else
        {
            echo "
                <td>no</td>
            </tr>";
        } 
            echo "
            <tr>
                <th>Commentaires</th>";
        if (!empty($_POST['comments']))
        {
            echo "
                <td>" . $_POST['comments'] . "</td>
            </tr>";   
        } 
        else
        {
            echo "
                <td>No comments</td>
            </tr>";
        } 
?>
        </tbody>
    </table>

<?php     
        }
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>