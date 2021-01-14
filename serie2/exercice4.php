<?php
  $serie = '2';
  $exercice = '4';
  include('../template/header.php');
  require('document.php');
  require('documentStore.php');
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
    $livre = new Document();
    $livre->idDoc = 1;
    $livre->category = "reference";
    $livre->author = "Nigel Rees";
    $livre->title = "Sayings of the Century";
    $livre->price = 8.95;

    $livre2 = new Document();
    $livre2->idDoc = 2;
    $livre2->category = "roman";
    $livre2->author = "Harlan Cobben";
    $livre2->title = "Dans les bois";
    $livre2->price = 9;

    $listeDoc = new DocumentStore();
    $listeDoc->addDocument($livre);
    $listeDoc->addDocument($livre2);
    foreach($listeDoc->lesLivres as $doc)
    {
        echo tableau($doc->getContent());
    }
?>  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>