<?php
class Joueur{
private $_nomPerso;
private $_pouvoirPerso;
private $_viePerso;
private $_attaquePerso;

//initialisation

    public function __construct($nomPerso, $pouvoirPerso){
        $this->_nomPerso = $nomPerso;
        $this->_pouvoirPerso = $pouvoirPerso;
        $this->_viePerso = 100;
        $this->_attaquePerso = 5;
    }

//getters
    public function getNomPerso(){
        return $this->_nomPerso;
    }
    
    public function getPouvoirPerso(){
        return $this->_pouvoirPerso;
    }
    
    public function getViePerso(){;
        return $this->_viePerso;
    }

    public function getAttaquePerso(){;
    return $this->_attaquePerso;
    }

//setters

public function setNomPerso($nomPerso){
    $this->_nomPerso = $nomPerso;
   
}

public function setPouvoirPerso($pouvoirPerso){
     $this->_pouvoirPerso = $pouvoirPerso;
    
}

public function setViePerso($viePerso){
      $this->_viePerso = $viePerso;
   
}

public function setAttaquePerso($attaquePerso){
    $this->_attaquePerso = $attaquePerso;
 
}

public function creation(){
    echo "Votre personnage a été crée ! <br>";
    echo "Le nom de votre personnage est : ";
    echo "$this->_nomPerso <br>";
    echo "Votre pouvoir est  : ";
    echo "$this->_pouvoirPerso <br>";
    echo "Vous avez $this->_viePerso hp." ;
    echo "<br>";
    echo "<br>";
    
  
}

public function decreaseVie(){
    $this->_viePerso = $this->_viePerso -5;
    echo "Vous avez maintenant $this->_viePerso hp. ";


}






}



?>
