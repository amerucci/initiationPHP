<?php

//VARIABLE DE TYPE STRING

//C : Créer deux variables nom et prénom, et afficher je m'appelle PRENOM NOM
//ON DECLARE LA VARIABLE
$prenom = "Alain";
$nom = "Merucci";

// echo $prenom $nom;
//ICI ON PASSE LES VARIABLES DANS LES GUILLEMETS
echo "salut je suis l'appel $prenom $nom"; 
//R : salut je suis l'appel Alain Merucci

//ICI ON PASSE LES VARIABLES A L'EXTERIEUR LES GUILLEMETS EN LES CONCATENANTS AVEC UN .
echo "salut je suis l'appel ".$prenom." ".$nom; 
//R : salut je suis l'appel Alain Merucci

//ICI ON UTILISE DES SIMPLES GUILLEMETS FAISANT AINSI QUE LES VARIABLES COMPRISES DEDANT SOIENT CONSIDERE COMME CHAINE DE CARACTERE
echo 'salut je suis l\'appel $prenom $nom';
//R : salut je suis l'appel $prenom $nom


//VARIABLE DE TYPE TABLEAU
//C : Créer une variable de type tableau comprenant vos 5 films préférés.

?>