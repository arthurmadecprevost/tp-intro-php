<?php
    $serie = '3';
    $exercice = '4';
    $inTwoMonths = 60 * 60 * 24 * 60 + time();
    setcookie('lastVisit', date("d/m/Y à G:i"), $inTwoMonths);
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
        <br>

        <div class="mb-3">
                
        <div class="alert alert-info" role="alert">
        <?php
            if(isset($_COOKIE['lastVisit']))
            {
            $visit = $_COOKIE['lastVisit'];
            echo "Vous avez déjà visité cette page le ". $visit;
            }
        ?>
        </div>
        
        </div>     

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>