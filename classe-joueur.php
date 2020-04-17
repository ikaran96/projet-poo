<?php
class Joueur{
private $_nomPerso;
private $_pouvoirPerso;
private $_viePerso;
private $_attaquePerso;   b  
private $_damageReceived;

//initialisation

    public function __construct($nomPerso, $pouvoirPerso){
        $this->_nomPerso = $nomPerso;
        $this->_pouvoirPerso = $pouvoirPerso;
        $this->_viePerso = 100;
        $this->_attaquePerso = rand(1,10);
        $this->_damageReceived = $this->_attaquePerso;
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

    public function getDamageReceived(){;
        return $this->_damageReceived;
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

public function setDamageReceived($damageReceived){
    $this->_damageReceived = $damageReceived;
 
}



///////////////////////////////////////////////////////////

public function creation(){   
    echo "Votre personnage a été crée ! <br>";
    echo "Le nom de votre personnage est : ";
    echo "$this->_nomPerso <br>";
    echo "Votre pouvoir est  : ";
    echo "$this->_pouvoirPerso <br>";
    echo "Vous avez $this->_viePerso hp. <br>" ;
    echo "Vous avez $this->_attaquePerso points d'attaque." ;
    echo "<br>";
    echo "<br>";
}

public function bot(){   
    echo "Le bot est prêt à vous battre <br>";
    echo "Il a $this->_viePerso hp. <br>" ;
    echo "Il a $this->_attaquePerso points d'attaque." ;
    echo "<br>";
    echo "<br>";
}





public function decreaseVie(){
    $this->_viePerso = $this->_viePerso -  $this->_damageReceived ;
    echo "Vous avez maintenant $this->_viePerso hp.<br>";
    echo "<br>";
}






}



?>
