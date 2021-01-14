<?php
  if (isset($_POST['search'])) 
  {
    switch($_POST['site']) 
    {   
      case '#':
        header('location: #');
      exit;

      case 'com':
        header('location: https://amazon.com/');
      exit;

      case 'comau':
        header('location: https://amazon.com.au/');
      exit;

      case 'br':
        header('location: https://amazon.com.br/');
      exit;

      case 'de':
        header('location: https://amazon.de/');
      exit;

      case 'ca':
        header('location: https://amazon.ca/');
      exit;

      case 'cn':
        header('location: https://amazon.cn/');
      exit;

      case 'es':
        header('location: https://amazon.es/');
      exit;

      case 'in':
        header('location: https://amazon.in/');
      exit;

      case 'it':
        header('location: https://amazon.it/');
      exit;

      case 'jp':
        header('location: https://amazon.co.jp/');
      exit;

      case 'mx':
        header('location: https://amazon.com.mx/');
      exit;

      case 'nl':
        header('location: https://amazon.nl/');
      exit;

      case 'ae':
        header('location: https://amazon.ae/');
      exit;

      case 'sg':
        header('location: https://amazon.sg/');
      exit;

      case 'tr':
        header('location: https://amazon.com.tr/');
      exit;

      case 'french':
            header('location: https://amazon.fr/');
      exit;

      case 'uk':
            header('location: https://amazon.co.uk');
      exit;

      default:
            header('location: serie_3_exo_2.php');
      exit;
    }
  }
  $serie = '3';
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
        <br>

        <form action="" method="post">
        <div class="mb-3">
          <label for="formGroupExampleInput" class="form-label">Veuillez choisir votre magasin</label>
          <select name="site" id="site-select" class="form-select" aria-label="Selectionner un magasin">
                <option value="#">Choisissez votre magasin</option>
                <option value="comau">Australie</option>
                <option value="de">Allemagne</option>
                <option value="br">Brésil</option>
                <option value="ca">Canada</option>
                <option value="cn">Chine</option>
                <option value="es">Espagne</option>
                <option value="com">États-Unis</option>
                <option value="french">France</option>
                <option value="in">Inde</option>
                <option value="it">Italie</option>
                <option value="jp">Japon</option>
                <option value="mx">Mexique</option>
                <option value="nl">Pays-Bas</option>
                <option value="uk">Royaume-Uni</option>
                <option value="ae">Émirats Arabes Unis</option>
                <option value="sg">Singapour</option>
                <option value="tr">Turquie</option>
            </select>        
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary" name="search" value="Visiter le magasin" formtarget="_blank">Visiter le magasin</button>
        </div>
        </form>     

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>