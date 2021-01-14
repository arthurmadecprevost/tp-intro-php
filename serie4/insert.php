<?php
    include('../include/config.php');
    include('../template/header.php');
    
    if(isset($_POST['insert']))
    {
        // récupérer les valeurs 
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $contactnumber = $_POST['contactnumber'];
        $address = $_POST['address'];
        // Requête mysql pour insérer des données
        $sql = "INSERT INTO `users`(`FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`) VALUES (:firstname,:lastname,:emailId,:contactNumber,:adresse)";
        $res = $conn->prepare($sql);
        $exec = $res->execute(array(":firstname"=>$firstname,":lastname"=>$lastname,":emailId"=>$email,":contactNumber"=>$contactnumber,":adresse"=>$address));
        // vérifier si la requête d'insertion a réussi
        if($exec) 
        {
            echo "<meta http-equiv=\"refresh\" content=\"0;url=lister.php\">";
        } 
        else 
        {
            echo "<div class=\"alert alert-danger\" role=\"alert\">
            Échec de l'opération d'insertion
          </div>";
        }       
    }
?>