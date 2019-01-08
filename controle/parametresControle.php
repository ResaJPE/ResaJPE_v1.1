<?php


function parametresControle($action) {
	// Sélecteur d'actions
	if (isset($_SESSION['id'])){
		switch ($action) {
			case 'profil':
				parametresControle_profilAction();
			break;
			default : 
				parametresControle_defaultAction();
			break;
		}
	}
	else {	
		header("Location:index.php");
	}
}

function parametresControle_defaultAction() {
	$titrePage="Paramètres";
	$titreOnglet=Config::APPLI_NAME.'-'.$titrePage;
	require '../page/parametresPage.php';
}

function parametresControle_profilAction() {
  
}
