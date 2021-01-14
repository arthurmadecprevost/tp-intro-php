<?php
  $serie = '2';
  $exercice = '3';
  include('../template/header.php');
  require('calculator.php');
  require('calcAdvenced.php');
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
    echo "&#x221A;" . $calcAdvenced->nbr1 . " = ". $calcAdvenced->racine_carre() ." <br>";
    echo "&#x2147;^" . $calcAdvenced->nbr1 . " = ". $calcAdvenced->exponentiel() ." <br>";
?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>