
<?php

function connectBDD($hostname, $database, $username, $password) {
    try {
        $bdd = new PDO("mysql:host=".$hostname.";dbname=".$database.";charset=utf8","".$username."","".$password."");
        return $bdd;
    } catch (PDOException $e) {
        die("Erreur de connexion au serveur MySQL : " . $e->getMessage());
    }
}


function getUtilisateur1($pseudo, $mdp) {
	global $bdd;
	$requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo = :pseudo AND mdp = :mdp");
	$requete->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
	$requete->bindValue(':mdp', $mdp, PDO::PARAM_STR);
	$requete->execute();
	return $requete->fetch();
}


?>
