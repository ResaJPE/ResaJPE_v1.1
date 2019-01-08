<?php
include_once('Connexion.php');

function userData_getIDandPwd($login){
	
	$requete = 'SELECT * FROM user WHERE login = "'.$login.'"';
	$requete = Connexion::query($requete);
	return $requete;
}
function userData_insert($login, $password, $nom, $prenom, $type){
	$requete = 'INSERT INTO user(login,password,nom,prenom,idType) VALUES ("'.$login.'", "'.$password.'","'.$nom.'","'.$prenom.'","'.$type.'")';
	Connexion::exec($requete);
}
