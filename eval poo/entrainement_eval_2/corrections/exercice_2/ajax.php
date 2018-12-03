<?php

require 'connexion.php';

$resultat = $pdo -> query("SELECT * FROM produit");
//on y met la requête

$tab['resultat'] = '';
//Je créer le tableau

while($produit = $resultat -> fetch(PDO::FETCH_ASSOC)){
	//dans la boucle on y met un array associatif puis on recupére les resultat ci-dessous
	
	$tab['resultat'] .= '<tr>';
	$tab['resultat'] .= '<td>' . $produit['id_produit'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['reference'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['categorie'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['titre'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['description'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['couleur'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['taille'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['public'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['prix'] . '</td>';
	$tab['resultat'] .= '<td>' . $produit['stock'] . '</td>';
	$tab['resultat'] .= '<td><img height="50px" src="../../13-framework/web/' . $produit['photo'] . '"/></td>';
	$tab['resultat'] .= '</tr>';
	
	
	// $tab['resultat'] .= '<tr>';
	// foreach($produit as $indice => $valeur){
		// if($indice != 'photo'){
			// $tab['resultat'] .= '<td>' . $valeur . '</td>';
		// }
		// else{
			// $tab['resultat'] .= '<td><img src="' . $valeur . '"/></td>';
		// }
	// }
	// $tab['resultat'] .= '</tr>';
	
}

echo json_encode($tab);
//il faut retourner un json qui contient toute les infos

// public function setSexe($arg){

//        //Je vérifie si le sexe est égale à male ou femelle

//        if(is_string($arg) && $arg == "male" || $arg == "femelle"){

//            $this -> sexe = $arg;

//        }