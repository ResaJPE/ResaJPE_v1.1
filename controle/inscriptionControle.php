<?php
include_once('../data/user.data.php');

function inscrireControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		case 'inscrire' :
			inscriptionControle_inscrireAction();
		break;
		default : 
			inscriptionControle_defaultAction();
		break;
	}
}


function inscriptionControle_defaultAction($message = null) {
    $titreOnglet='Inscription';
    $titrePage='S\'inscrire à '.Config::APPLI_NAME.' '.Config::APPLI_VERSION;
    $alerte = $message;
	require '../page/inscriptionPage.php';

}

function inscriptionControle_inscrireAction(){
	if (!empty($_POST)){
		$prenom = htmlspecialchars($_POST['prenom']);
		$nom = htmlspecialchars($_POST['prenom']);
		$identifiant = htmlspecialchars($_POST['identifiant']);
		$pw = htmlspecialchars($_POST['pw']);
		$pw2 = htmlspecialchars($_POST['pw2']);
		$typeAcc = $_POST['type'];
		if(isset($pw) && isset($pw2) && isset($prenom) && isset($nom) && isset($identifiant)){
			if($pw == $pw2){
				if(strlen($pw) >= 8){
					if($typeAcc == 1 or $typeAcc == 3){
						$password_hash = sha1($pw);
						userData_insert($identifiant, $password_hash, $nom,$prenom, $typeAcc);
						$_SESSION['msg_success'] = "Votre inscription a été validée. Vous pouvez maintenant vous connecter. Bien joué !";
						header("Location: ?controle=connexion");
					}else{
						$message = "Une erreur est survenue. Veuillez réessayer";
					}
				}else{
					$message = "Votre mot de passe doit dépasser 8 caractères";
				}
			}else{
				$message = "Vos mots de passes ne correspondent pas";
			}
		}else{
			$message = "Veuillez remplir tous les champs !";
		}
		inscriptionControle_defaultAction($message);
	}
	else{
		inscriptionControle_defaultAction();
	}
}


