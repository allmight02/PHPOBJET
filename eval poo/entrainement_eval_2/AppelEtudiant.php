<?php

include "exercice1.php"; //On inclus le fichie rpopur pouvoir faire appelle au function

$e1 = new Etudiant;

//On instancie la classe pour le nouvel etudiant

$e1 -> setPrenom('Jho');
$e1 -> setNom('sinvry');
$e1 -> setEmail('jhordan@live.fr');
$e1 -> setTelephone('0142306577');

$etudiant1 = $e1->getInfos();

echo '<h3>Etudiant 1 :</h3>'; 
echo '<ul>';
echo '<li>  Prenom : ' . $etudiant1['prenom'] . '</li>';
echo '<li> Nom : ' . $etudiant1['nom'] . '</li>';
echo '<li> Email : ' . $etudiant1['email'] . '</li>';
echo '<li>Telephone : ' . $etudiant1['telephone'] . '</li>';
echo '</ul>';

