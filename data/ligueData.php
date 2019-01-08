<?php
include_once('Connexion.php');

//
// Table : ligue
//
// getAll()
// ligueData_getByEmail()
// getLimit()
// findOne()
// count()
// update()
// insert()

function ligueData_getAll(){
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string

    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT * FROM ligue';

    // Execute la requete sur la base grâce à la méthode query() prévu dans la classe Connexion
    $liste=Connexion::query($requete);

    return $liste;
}

function ligueData_getByEmail($email){
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string

    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT id, mdp, libelle FROM ligue WHERE email="'.$email.'"';

    // Execute la requete sur la base grâce à la méthode query() prévu dans la classe Connexion
    $resultat=Connexion::query($requete);

    return $resultat;
}
