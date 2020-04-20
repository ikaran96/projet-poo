<style>
body{
    margin:0;
    padding:0;
    background-color:lightgrey;
}

p{
    font-family:Arial;
}

h1{
    font-family:Arial;
    font-weight:900;
    text-align:center;
}

.intro{
    display:flex;
    justify-content:center;
}

.intro > p {
    background-color:white;
    padding:20px;
    border-radius:20px;
    text-align:center;
    margin:20px;
    border:5px solid black;
}

.perdu{
    background-color:red;
    color:white;
    width:100px;
    padding:10px;
    text-align:center;
    border-radius:10px;
    margin-left:auto;
    margin-right:auto;
}

.gagne{
    background-color:green
    color:white;
    width:100px;
    padding:10px;
    text-align:center;
    border-radius:10px;
    margin-left:auto;
    margin-right:auto;
}

h2{

    font-family:Arial;
    font-weight:200;
    text-align:center;
}

.jeu{
    font-family:arial;
    text-align:center;
}
</style>







<?php
require_once('classe-j.php');?>

<h1>~ Kool and the gangz ~</h1>

<h2>Deux gangs ennemis vont se battre pour acquérir un territoire dans la ville de San Andreas.<br>
Chaque gang dispose de 10 membres. Un gang peut tuer un membre du gang adverse si le résultat du dé est égal à un 
nombre pair. Le gagnant est le gang qui dispose d'au moins un membre vivant. </h2>


<div class="intro">
<p>
<?php
echo "Gang 1 <br>";
$gang1= new Gang('Vagos');
$gang1->creation();?>
</p>
<p>
<?php
echo "Gang 2 <br>";
$gang2= new Gang('Ballas');
$gang2->creation();?> 
</p>
</div>


<div class="jeu">
<?php
echo "Le Gang 1 lance le dé <br>";
$dice1 = $gang1->dice();
echo "Le Gang 2 lance le dé <br>";
$dice2 = $gang2->dice();
echo "Résultat : Gang 1 = ".$dice1." , Gang 2 = ".$dice2." <br><br>";

if ($dice1>$dice2){
  echo "<br>  Le Gang 1 Commence <br><hr> ";
  $aquidejouer = 1;
}else if ($dice1<$dice2){
  echo "<br>  Le Gang 2 Commence <br><hr> ";
  $aquidejouer = 0;}

  $i=1;
  $j=1;
  $nbtour=1;
  while(($gang1->getMembreGang() > 0) && ($gang2->getMembreGang() > 0) && ($nbtour<=30) ){
  if ($aquidejouer <= 1){
    echo "Tour n°".$i." Gang 1 :";
$killoupas = $gang1->kill($kill);
echo "Le Gang 2 a maintenant " .$gang1->getMembreGang(). " membres<br><br>";
$aquidejouer = $aquidejouer +1;
$i++;
echo"<br>";
}else{
    echo "Tour n°".$j." Gang 2 :";
    $killoupas = $gang2->kill($kill);
    echo "Le Gang 1 a maintenant ".$gang2->getMembreGang()." membres<br><br>";
      $aquidejouer = $aquidejouer -1;
        $j++;
    echo"<br>";
  }
  }?>

  </div>


    






