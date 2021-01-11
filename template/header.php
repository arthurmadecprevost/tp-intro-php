<?php 
    $URL_base = "http://localhost/intro_php/tp-intro-php";
    //$URL_base = "http://localhost";

?>    
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>TP Introduction au PHP</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= $URL_base ?>/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $URL_base ?>/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $URL_base ?>/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="<?= $URL_base ?>/favicon_io/site.webmanifest">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $URL_base ?>">TP Introduction au PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Série 1
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie1/exercice1.php">Exercice 1</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie1/exercice2.php">Exercice 2</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie1/exercice3.php">Exercice 3</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie1/exercice4.php">Exercice 4</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Série 2
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie2/exercice1.php">Exercice 1</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie2/exercice2.php">Exercice 2</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie2/exercice3.php">Exercice 3</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie2/exercice4.php">Exercice 4</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Série 3
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie3/exercice1.php">Exercice 1</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie3/exercice2.php">Exercice 2</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie3/exercice3-1.php">Exercice 3-1</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie3/exercice3-2.php">Exercice 3-2</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie3/exercice3-3.php">Exercice 3-3</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie3/exercice4.php">Exercice 4</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Série 4
                </a>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie4/exercice1.php">Exercice 1</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie4/exercice2.php">Exercice 2</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie4/exercice3.php">Exercice 3</a></li>
                    <li><a class="dropdown-item" href="<?= $URL_base ?>/serie4/exercice4.php">Exercice 4</a></li>
                </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>