<?php
  $serie = '2';
  $exercice = '2';
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
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Entier</th>
                    <th scope="col">Factoriel</th>
                </tr>
            </thead>

            <tbody>
<?php           
        function factoriel($nbr) 
        {   
            if($nbr === 0)// condition d'arret 
            {
                $nbr = 1; 
            }
            else
            {
                $nbr = $nbr * factoriel($nbr-1); 
            }
            return $nbr;
        } 
        for($i = 0;$i < 11;$i++)
        {
?>                        
                <tr>
                    <td><?= $i ?></td>
                    <td><?= factoriel($i) ?></td>
                </tr>
<?php        
        } 
?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>