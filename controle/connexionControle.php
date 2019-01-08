<?php
include_once('../data/user.data.php');

function connexionControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		case 'connecter' :
			connexionControle_connecterAction();
		break;
		case 'deconnecter' :
			connexionControle_deconnecterAction();
		break;
		default : 
			connexionControle_defaultAction('');
		break;
	}
}


function connexionControle_defaultAction($message) {
		
    $titreOnglet=Config::APPLI_NAME.'-Connexion';
    $titrePage='Se connecter à '.Config::APPLI_NAME.' '.Config::APPLI_VERSION;
    $alerte = $message;
	require '../page/connexionPage.php';

}

function connexionControle_connecterAction(){
	if (!empty($_POST)){
		$mdp=$_POST['mdp'];
		$login=$_POST['login'];
		$resultat=userData_getIDandPwd($login);
		if (!empty($resultat))
		{
			$mdpLigue=$resultat[0]['password'];
			if (sha1($mdp)==$mdpLigue){
				$_SESSION['id']=$resultat[0]['id'];
				$_SESSION['nom']=$resultat[0]['nom'];
				$_SESSION['prenom']=$resultat[0]['prenom'];
				$_SESSION['type']=$resultat[0]['idType'];
				header("Location:?controle=accueil");
			}
			else
			{
				connexionControle_defaultAction('Veuillez vous reconnecter, vos identifiants ne correspondent pas !');
			}
		}
		else
		{
			connexionControle_defaultAction('Veuillez vous reconnecter, vos identifiants ne correspondent pas !');
		}
	}
	else{
		connexionControle_defaultAction('Veuillez vous reconnecter, vos identifiants ne correspondent pas !');
	}
}

function connexionControle_deconnecterAction() {
	session_destroy();
	unset($_SESSION);
	connexionControle_defaultAction('Merci de vous êtes déconnecté proprement !');
}

// Ici une manière d'initialiser des paramètres par défaut dans une fonction PHP !
function _connexionControle_oublierAction($message=null) {
 
}
function _connexionControle_inscrireAction($message=null) {

}


