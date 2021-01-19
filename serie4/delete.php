<?php
$serie = '4';
$exercice = '1';
include('../template/header.php');
include('../include/config.php');

$msg = '';
// Check that the contact ID exists
if (isset($_GET['id'])) {
    // Select the record that is going to be deleted
    $res = $conn->prepare('SELECT * FROM users WHERE id = ?');
    $res->execute([$_GET['id']]);
    $contact = $res->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
    // Make sure the user confirms beore deletion
    if (isset($_GET['confirmation'])) {
        if ($_GET['confirmation'] == 'oui') {
            // User clicked the "Yes" button, delete record
            $res = $conn->prepare('DELETE FROM users WHERE id = ?');
            $res->execute([$_GET['id']]);
            $msg = 'Le contact a bien été supprimé!';
        } else {
            echo "<meta http-equiv=\"refresh\" content=\"0;url=lister.php\">";
        }
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
     
        <h3>Suppression de <?=$contact['FirstName']?> <?=$contact['LastName']?> (<?=$contact['id']?>)</h3>
        <p>Voulez-vous vraiment supprimer l'utilisateur?</p>

        <?php if ($msg): ?>

        <div class="alert alert-success" role="alert">
            <?=$msg?>
        </div>
        <?php else: ?>
        
        <a href="delete.php?id=<?=$contact['id']?>&confirmation=oui" type="button" class="btn btn-primary">Oui</a>
        <a href="delete.php?id=<?=$contact['id']?>&confirmation=non" type="button" class="btn btn-danger">Non</a>

        <?php endif; ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>