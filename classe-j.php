<?php
class Gang{
private $_nomGang;
private $_membreGang;

//initialisation

    public function __construct($nomGang){
        $this->_nomGang = $nomGang;
        $this->_membreGang = 10;
    }

//getters
    public function getNomGang(){
        return $this->_nomGang;
    }
    
    
    public function getMembreGang(){;
        return $this->_membreGang;
    }


//setters

public function setNomGang($nomGang){
    $this->_nomGang = $nomGang;
   
}


public function setMembreGang($membreGang){
      $this->_membreGang = $membreGang;
   
}






///////////////////////////////////////////////////////////

public function creation(){   
    echo "Votre gang a été crée ! <br>";
    echo "Le nom de votre gang est : ";
    echo "$this->_nomGang <br>";
    echo "Vous avez $this->_membreGang membres. <br>" ;
    echo "<br>";
    echo "<br>";
}



public function dice() {
    $var= rand(1,6);
    return $var;
}

public function kill($kill){
    $dice=$this->dice();
    echo "<br>$this->_nomGang jette le dé<br>";
    if($dice == 2 || $dice == 4|| $dice == 6){
        $kill = 1;
        $this->_membreGang = $this->_membreGang - $kill;
        echo "$this->_nomGang tue un membre du gang adverse car son dé affiche : ".$dice."<br>";
    }else{
        echo "$this->_nomGang ne tue personne car son dé affiche : ".$dice."<br>";
      }return $kill;
  }}

?>

