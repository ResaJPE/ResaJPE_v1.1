<?php
include_once('Connexion.php');

//
// Table : reservation
//
// getAll()
// getLimit()
// findOne()
// count()
// update()
// insert()

function visitesData_getAll(){
    #1
    // $liste : liste mixte (classique + associative) de type [numéro de la ligne]['champ de la table']
    // $requete  : string
    #2
    // Mettre la requête dans une variable : aide au debug
    $requete='SELECT visite.id, date, etat, etatVisite.etatVisites AS "Etat", entreprise.raisonSociale AS "NomEntreprise", service.choix AS "choixService", isAccepted FROM visite, etatVisite, entreprise, service WHERE etatVisite.id = visite.etat 
    AND visite.entreprise_id = entreprise.id AND service.id = visite.service_id ORDER BY date DESC';

    // Execute la requete sur la base m2l grâce à la méthode query() prévue dans la classe Connexion
    $liste=Connexion::query($requete);
    
    #3
    return $liste;
}
function visitesData_getNbVisitesForId($id){
	
	$requete = 'SELECT COUNT(visite.id) AS "NbVisites" FROM visiteur, visite WHERE visiteur.idVisite = '.$id;
	$result = Connexion::query($requete);
	return $result;
}


function visitesData_getMaxInscrits($id){

    $requete = 'SELECT nbPlacesMax FROM visite WHERE id ='.$id;
    $result = Connexion::query($requete);
    return $result;

}
