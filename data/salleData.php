<?php
include_once('Connexion.php');

//
// Table : salle
//
// getAll()
// getLimit()
// findOne()
// count()
// update()
// insert()


function salleData_getAll(){
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string

    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT * FROM salle';

    // Execute la requete sur la base grâce à la méthode query() prévue dans la classe Connexion
    $liste=Connexion::query($requete);

    return $liste;
}

function salleData_count(){
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string

    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT COUNT(*) AS nbSalles FROM salle';

    // Execute la requete sur la base grâce à la méthode query() prévue dans la classe Connexion
    $resultat=Connexion::query($requete);

    return $resultat[0]['nbSalles'];
}


function salleData_insert($libelle,$nbPlaces){

    // $resultat : int
    // $requete  : string

    // Mettre la requête dans une variable : aide au debug
	$requete='INSERT INTO salle(libelle,nbPlaces) VALUES ("'.$libelle.'","'.$nbPlaces.'")';

    // Execute la requete sur la base grâce à la méthode exec() prévue dans la classe Connexion
    $resultat=Connexion::exec($requete);

    return $resultat;
}


