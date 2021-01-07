<?php
  $serie = '2';
  $exercice = '3';
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
$calc = new Calculator();
$calc->nbr1 = 3;
$calc->nbr2 = 4;
echo "$calc->nbr1 + $calc->nbr2 = ". $calc->add() ." <br>";
echo "$calc->nbr1 - $calc->nbr2 = ". $calc->sub() ." <br>";
echo "$calc->nbr1 * $calc->nbr2 = ". $calc->multiply() ." <br>";
$calcAdvenced = new CalcAdvenced();
$calcAdvenced->nbr1 = 3;
echo "$calcAdvenced->nbr1 = ". $calcAdvenced->racine_carre() ." <br>";
echo "$calcAdvenced->nbr1 = ". $calcAdvenced->exponentiel() ." <br>";
class Calculator
{
    public $nbr1,$nbr2;

    function add()
    {
        return $this->nbr1 + $this->nbr2;
    }
    function sub()
    {
        return $this->nbr1 - $this->nbr2;
    }
    function multiply()
    {
        return $this->nbr1 * $this->nbr2;
    }
}    
class CalcAdvenced extends Calculator
{
    function racine_carre()
    {
        return sqrt($this->nbr1);
    }
    function exponentiel()
    {
        return exp($this->nbr1);
    }
}
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>