<?php
require_once('classe-joueur.php');

$joueur1= new Joueur('Blob', 'Idk');
$joueur1->creation();


while($joueur1->getViePerso()>0){
    $joueur1-> decreaseVie();

}


if($joueur1->getViePerso() <=0){
    echo "Vous avez perdu";
}else{
    echo "Vous avez gagné";
}
?>




