<?php


function listesControle($action) {
	if (isset($_SESSION['id'])){
		switch ($action) {
			case 'tri':
				listesControle_triAction();
				break;
			default : 
				listesControle_defaultAction();
			break;
		}
	}
	else
	{	
		header("Location:index.php");
	}
}

function listesControle_defaultAction() {
    $titrePage="Listes";
	$titreOnglet=Config::APPLI_NAME.'-'.$titrePage;
	require '../page/listesPage.php';
}

function listesControle_triAction() {
    // A coder
}


