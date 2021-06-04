<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'pdo.php';
require_once 'classes/User.php';
require_once 'classes/Localisation.php';

echo"<pre>";
print_r($_POST);
echo"</pre>";


if(isset($_POST['pseudo'])){
    $image = $_FILES['image']['name'];

    if(move_uploaded_file($_FILES['image']['tmp_name'], "imagesUsers/".$image)){
        $sql = "INSERT INTO Registered(pseudo, name_registered, first_name_registered, mail, password)"
            . " VALUES(?, ?, ?, ?, ?)";

        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST["pseudo"]);
        $requete->bindValue(2, $_POST["name_registered"]);
        $requete->bindValue(3, $_POST["first_name_registered"]);
        $requete->bindValue(4, $_POST["mail"]);
        $requete->bindValue(5, $_POST["password"]);
        echo $requete->execute();

        $sql = "INSERT INTO Localisation(id_localisation, address, town, region, postal_code)"
            . " VALUES(?, ?, ?, ?, ?, ?, ?)";

        $requete = $pdo->prepare($sql);
        $requete->bindValue(1, $_POST["id_localisation"]);
        $requete->bindValue(2, $_POST["address"]);
        $requete->bindValue(3, $_POST["town"]);
        $requete->bindValue(4, $_POST["region"]);
        $requete->bindValue(5, $_POST["postal_code"]);
        echo $requete->execute();
        header("index.html");

    }else{
        // Image non chargée
        echo -2;
    }
}else{
    // Format passé non conforme
    echo -1;
}


?>


