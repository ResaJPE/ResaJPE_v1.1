<?php

function changelogControle($action) {
	// Sélecteur d'actions
	switch ($action) {
		default : 
			changelogControle_defaultAction();
		break;
	}
}


function changelogControle_defaultAction() {
	if(isset($_SESSION['id'])){
	    $titreOnglet='Changelog';
	    $titrePage='Changelog';
		require '../page/changelogPage.php';
	}else{
		header("Location: index.php");
	}
}