<?php
$serie = '4';
$exercice = '1';
include('../template/header.php');
include('../include/config.php');
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $firstname = isset($_POST['first_name']) ? $_POST['first_name'] : '';
        $lastname = isset($_POST['last_name']) ? $_POST['last_name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $contactnumber = isset($_POST['contactnumber']) ? $_POST['contactnumber'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';
        // Update the record
        $res = $conn->prepare('UPDATE users SET FirstName = ?, LastName = ?, EmailId = ?, ContactNumber = ?, Address = ? WHERE id = ?');
        $res->execute([$firstname, $lastname, $email, $contactnumber, $address, $_GET['id']]);
        $msg = '<div class="alert alert-success" role="alert">
        Mise à jour effectuée avec succès !
        </div>';
        echo "<meta http-equiv=\"refresh\" content=\"1;url=lister.php\">";

    }
    // Get the contact from the contacts table
    $res = $conn->prepare('SELECT * FROM users WHERE id = ?');
    $res->execute([$_GET['id']]);
    $contact = $res->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
    } else {
        exit('No ID specified!');
    }
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
        <h3>Modification du contact <?=$contact['FirstName']?> <?=$contact['LastName']?> (<?=$contact['id']?>)</h3>
        <?php if ($msg): ?>
        <p><?=$msg?></p>
        <?php endif; ?>
        <form action="update.php?id=<?=$contact['id']?>" method="post">
            <div class="row">
                <div class="col">
                    <label>Prénom</label>
                    <input type="text" class="form-control" name="first_name" placeholder="<?=$contact['FirstName']?>" value="<?=$contact['FirstName']?>" required>
                </div>
                <div class="col">
                    <label>Nom</label>
                    <input type="text" class="form-control" name="last_name" placeholder="<?=$contact['LastName']?>" value="<?=$contact['LastName']?>" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="<?=$contact['EmailId']?>" value="<?=$contact['EmailId']?>" required>
                </div>
                <div class="col">
                    <label>Numéro de téléphone</label>
                    <input type="text" class="form-control" name="contactnumber" placeholder="<?=$contact['ContactNumber']?>" value="<?=$contact['ContactNumber']?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Adresse</label>
                <textarea class="form-control" name="address" rows="3"><?=$contact['Address']?></textarea>
            </div>
            <br>
            <button type="reset" class="btn btn-primary">Rénitialiser</button>
            <button type="submit" name="insert" class="btn btn-primary">Envoyer</button>
        </form>        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>


</div>
