<?php
    include('../include/config.php');
    include('../template/header.php');
    
    if(isset($_POST['insert']))
    {
        $firstname = $_POST['first_name'];
        $lastname = $_POST['last_name'];
        $email = $_POST['email'];
        $contactnumber = $_POST['contactnumber'];
        $address = $_POST['address'];

        $sql = "INSERT INTO `users`(`FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`) VALUES (:firstname,:lastname,:emailId,:contactNumber,:adresse)";
        
        $res = $conn->prepare($sql);
        $exec = $res->execute(array(":firstname"=>$firstname,":lastname"=>$lastname,":emailId"=>$email,":contactNumber"=>$contactnumber,":adresse"=>$address));
        
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>