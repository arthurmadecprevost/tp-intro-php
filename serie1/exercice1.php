<?php
  $serie = '1';
  $exercice = '1';
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
                    <th scope="col">Nombre</th>
                    <th scope="col">Premier ?</th>
                    <th scope="col">Pair ou impair ?</th>
                </tr>
            </thead>
            <tbody>
<?php     
          for($i = 1;$i < 11;$i++)
          {
              if($i % 2 == 0)
              {
                  $pair_impair = 'pair';
              }
              else
              {
                  $pair_impair = 'impair';
              }
              $nbDiv = 0;//Et on compte le nombre de diviseur    
              for($j=1;$j<=$i;$j++){
                  if($i%$j==0){
                      $nbDiv++;            
                  }
              }
              if($nbDiv == 2)
              {
                  $premier = 'Oui';
              }   
              else
              {
                  $premier = 'Non';
              }
?>             
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $premier ?></td>
                    <td><?= $pair_impair ?></td>
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
