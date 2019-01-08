<?php
include_once('../data/visites.data.php');

function visitesControle($action) {
	// Sélecteur d'actions
	if (isset($_SESSION['id'])){
		switch ($action) {
			default : 
				visitesControle_defaultAction();
			break;
		}
	}
	else
	{	
		header("Location:index.php");
	}
}

function visitesControle_defaultAction() {
	if($_SESSION['type'] == 1){
    $titrePage="Visites disponibles";
	$titreOnglet=$titrePage;
    $listeVisites=visitesData_getAll();
	require '../page/visitesPage.php';
	}
	elseif($_SESSION['type'] == 2){

	$titrePage="Visites en ligne";
	$titreOnglet=$titrePage;
    $listeVisites=visitesData_getAll();
	require '../page/visitesPage.php';
	}
	elseif($_SESSION['type'] == 3){

	$titrePage="Visites acceptées";
	$titreOnglet=$titrePage;
    $listeVisites=visitesData_getAll();
	require '../page/visitesPage.php';
	}

}

function visitesControle_controlBar($i){

//On importe le nombre de réservations pour la visite
				$nbInscrits = visitesData_getNbVisitesForId($i['id']);
				$nbMaxInscrits = visitesData_getMaxInscrits($i['id']);
				$value = ($nbInscrits[0]['NbVisites']/$nbMaxInscrits[0]['nbPlacesMax'])*100;
					//Si value est inférieur à 30
					if($value<30){
						echo 'class="progress-bar progress-bar-vert" style = "width:'.$value.'%"';

					}
					//Si value est compris en 30 et 60
					elseif($value<70 AND $value>30){
						echo 'class="progress-bar progress-bar-orange" style = "width:'.$value.'%"';
					}
					//Si value est supérieur à 70
					elseif($value>70){
						echo 'class="progress-bar progress-bar-rouge" style = "width:'.$value.'%"';
					}
}
