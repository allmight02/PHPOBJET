<?php
class Etudiant
{
    private $prenom;

    public function setPrenom($arg){

        if (is_string($arg) && strlen($arg) >= 5 && strlen($arg) <= 30) {
        $this->prenom = $arg;

            # on effectue les vérification grâce au set donc il sera suivi aprés d'une function get
        }
        return $this;
    }

    public function getPrenom(){
       return $this ->prenom;

    }

    private $nom;

    public function setNom($arg){

        if (is_string($arg) && strlen($arg) >=  5 && strlen($arg) <= 30  ) {
            $this->nom = $arg;
            # code...
        }
        return $this;
    }

    public function getNom() {
        return $this->nom;
    }

    private $email;

    public function setEmail($arg){
        if (filter_var($arg, FILTER_VALIDATE_EMAIL ) ) {
            $this->email = $arg;
            # code...
        }
        return $this;
    }

    public function getEmail(){
        return $this->email;

    }




    private $telephone;

     public function setTelephone($arg){
      if(is_string($arg) &&  preg_match('#^[0-9]{10}$#',$arg)) { //if(is_string($arg) &&  preg_match('#^[0-9]{10}$#',$arg))
            $this->telephone = $arg;
            
             
        }
       return $this;
      }

     public function getTelephone(){
          return $this->telephone;
      }
// public function setTelephone($arg){

//         if(is_string($arg) &&  preg_match('#^[0-9]{10}$#',$arg)){

//            $this -> telephone = $arg;

//         }

//         return $this;

//     }

//     public function getTelephone(){

//         return $this -> telephone;

//     }

    //Créer une fonction getInfos() qui retourne un array avec toutes les infos
      //  - Instancier 3 fois la classe dans un autre fichier. Pour chaque etudiant affecter des valeurs et les afficher. 
     
    //  ----------------------------------------------
    public function getInfos(){
        $infos = array(); //mon $infos devient un tableau
        $infos['prenom'] = $this -> getPrenom();
        $infos['nom'] = $this -> getNom();
        $infos['email'] = $this -> getEmail();
        $infos['telephone'] = $this -> getTelephone();

        return $infos;
        //il faut retourner la variable infos
    }






}#fin class etudiant