<?php

// Fonctions d'accès aux datas


function accueilControle($action) {
	// Sélecteur d'actions pour la page d'authentification. Défini les actions à faire en fonction du click précédent puis la page à afficher ensuite
	
	if (isset($_SESSION['id'])){
		switch ($action) {
			case 'ajout':
				accueilControle_ajoutAction();
			break;
			default : 
				accueilControle_defaultAction();
			break;
		}
	}
	else
	{	
		header("Location:index.php");
	}
}

function accueilControle_defaultAction() {
	$titrePage="Accueil";
	$titreOnglet=Config::APPLI_NAME.'-'.$titrePage;
	require '../page/accueilPage.php';
}

function accueilControle_ajoutAction() {
	// A coder
}
