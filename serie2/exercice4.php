<?php
  $serie = '2';
  $exercice = '4';
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title><?php echo "Série $serie - Exercice $exercice"; ?></title>
  </head>
  <body>
    <?php 
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
function tableau($array){
    $idDoc = $array['idDoc'];
    $category = $array['Category'];
    $author = $array['Author'];
    $title = $array['Title'];
    $price = $array['Price'];
    return ("
    <p>Document n°$idDoc</p>
    <ul class=\"list-group\">
        <li class=\"list-group-item\">Categorie : $category</li>
        <li class=\"list-group-item\">Auteur : $author</li>
        <li class=\"list-group-item\">Titre : $title</li>
        <li class=\"list-group-item\">Prix : $price €</li>
    </ul>");
}
class Document
{
    public $idDoc,$category,$author,$title,$price;

    function getId()
    {
        return $this->idDoc;
    }
    function getContent()
    {
        return array("idDoc" => $this->idDoc,
                    "Category" => $this->category, 
                    "Author" => $this->author,
                    "Title" => $this->title, 
                    "Price" => $this->price);
    }
}
class DocumentStore
{
    public $lesLivres = array();

    function addDocument(Document $livre)
    {
        array_push($this->lesLivres,$livre);
    }
    function getDocuments()
    {
        return $this->lesLivres;
    }
}
?>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>