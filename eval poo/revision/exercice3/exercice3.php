<?php

/**Exercice 3 : Créer une classe
   Créer une classe Vehicule avec les propriétés suivantes :
       Marque (string de 3 à 30 caractères)
       Modèle (string de 3 à 30 caractères)
       année  (INT de 4 caractères)
       couleur (string de 3 à 30 caractères)
       km (INT de 1 à 6 caractères)

       Ajouter une fonction getInfos permettant de récupérer toutes les infos d'un objet Vehicule sous forme d'une array

       Dans un autre fichier, instancier la classe, créer 3 véhicules différents et afficher leur infos grâce à la méthode getInfos();*/

       class Vehicule{

        private $marque;

        public function setMarque($arg){
            if(is_string($arg)  && strlen($arg) > 3 && strlen($arg) < 30) {
                $this->marque= $arg;
                //on effectue les verification directement grâce à la fonction set que je créer
            }
            return $this;

        }
        public function getMarque(){
            return $this->marque;
            //si il ya un set il faut un get il sert a prendre les données saisie par l'internaute
        }

        
        private $modele;

        public function setModele($arg){
            if(is_string($arg)  && strlen($arg) > 3 && strlen($arg) < 30) {
                $this->modele= $arg;
                //on effectue les verification directement grâce à la fonction set que je créer
            }
            return $this;

        }
        public function getModele(){
            return $this->modele;
            //si il ya un set il faut un get il sert a prendre les données saisie par l'internaute
        }

        private $annee;
        public function setAnnee($arg){
            if(is_numeric($arg)  && strlen($arg) >== 4) {
                $this->annee= $arg;
                //on effectue les verification directement grâce à la fonction set que je créer
            }
            return $this;

        }
        public function getAnnee(){
            return $this->Annee;
            //si il ya un set il faut un get il sert a prendre les données saisie par l'internaute
        }

        private $couleur;

        public function setCouleur($arg){
            if(is_string($arg)  && strlen($arg) > 3 && strlen($arg) < 30) {
                $this->couleur= $arg;
                //on effectue les verification directement grâce à la fonction set que je créer
            }
            return $this;

        }
        public function getCouleur(){
            return $this->couleur;
            //si il ya un set il faut un get il sert a prendre les données saisie par l'internaute
        }

        private $km;

    
public function setKm($arg){
            if(is_string($arg)  && strlen($arg) > 1 && strlen($arg) < 6) {
                $this->km= $arg;
                //on effectue les verification directement grâce à la fonction set que je créer
            }
            return $this;

        }
        public function getKM(){
            return $this->km;
            //si il ya un set il faut un get il sert a prendre les données saisie par l'internaute
        }

        //-------------------------------------
        public function getInfos(){
            $infos = array();
            $infos[''] = $this -> getMarque();
            $infos[''] = $this -> getMarque();
            $infos[''] = $this -> getMarque();
            $infos[''] = $this -> getMarque();
            $infos[''] = $this -> getMarque();

            return $infos;
        }
        
995407






       }//Fon vehicule




       $v = new Vehicule; //On instancie la classe
       $v->setMarque($_POST['marque']);