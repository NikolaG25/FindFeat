<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

require_once 'pdo.php';
require_once 'classes/User.php';

session_start(); // à mettre tout en haut du fichier .php, cette fonction propre à PHP servira à maintenir la $_SESSION
echo "session";
if(isset($_POST['email'])) { // si le bouton "Connexion" est appuyé
    // on vérifie que le champ "Pseudo" n'est pas vide
    // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
    echo "intérieur isset";
    if(empty($_POST['email'])) {
        echo "Le champ Pseudo est vide.";
    } else{
        // on vérifie maintenant si le champ "Mot de passe" n'est pas vide"
        if(empty($_POST['password'])) {
            echo "Le champ Mot de passe est vide.";
        } else {

            $Mail = htmlentities($_POST['email'], ENT_QUOTES, "ISO-8859-1");
            $Password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            echo $Mail,$Password;
            //on se connecte à la base de données:
            $sql ="SELECT * FROM Registered WHERE mail = '".$Mail."' AND password = '".$Password."'";//si vous avez enregistré le mot de passe en md5() il vous suffira de faire la vérification en mettant mdp = '".md5($MotDePasse)."' au lieu de mdp = '".$MotDePasse."'
            $requete = $pdo->query($sql);

            if(empty($requete->fetchAll())) {
                echo "Le pseudo ou le mot de passe est incorrect, le compte n'a pas été trouvé.";
            } else {
                // on ouvre la session avec $_SESSION:
                $_SESSION['email'] = $Mail;
                echo "Vous êtes à présent connecté !";
            }
            }
        }

}

?>
