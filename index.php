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
</style>







<?php
require_once('classe-joueur.php');?>

<h1>~ Nom du jeu ~</h1>


<div class="intro">
<p>
<?php
$joueur1= new Joueur('Blob', 'Idk');
$joueur1->creation();?>
</p>
<p>
<?php
$joueur2= new Joueur('Bot', 'bot');
$joueur2->bot();?> 
</p>
</div>

<?php
while($joueur1->getViePerso()>0){
    $joueur1-> decreaseVie();

}


if($joueur1->getViePerso() <=0){
    echo "<p class='perdu'> Vous avez perdu</p>";
}else{
    echo "<p class='gagne'>Vous avez gagné</p>";
}
?>




