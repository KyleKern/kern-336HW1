<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css" type="text/css" />
        <title>Pokemon</title>
        <h1><center>Pokemon Player Profile </center></h1>
        <style>
             body {
    background-image: url("img/pokemon_background.png");
}
        </style>
        
        <?php

function trainerName()
{
$x=array("Tate A. Ketchum","Kamon H. Rowan","Fantina A. Diamond","Brock A. Oak","Brendan D. Surge","Kamon A. Wattson","Falkner A. Platinum","Candice A. Sapphire","Misty G. Diamond","Platinum A. Platinum","Gary G. Birch","Satoshi D. Surge","Silver E. Ketchum","Flannery E. Silver");
$random_keys=array_rand($x,3);
echo "Name:"."  ".$x[$random_keys[0]]."<br>";
}

function pokemonTeam()
{
$a=array("Squirtle","Charmander","Pikachu","Bulbasuar","Hitmonlee","Kabutops","Kangaskhan","Magmar","Moltres","Mewtwo","Caterpie","Pidgey","Rattata","Spearow","Ekans","Clefairy","Vulpix","Jigglypuff","Oddish","Paras","Poliwhirl","Alakazam","Gengar","Voltorb","Mr Mime","Pinsir","Tauros","Lapras","Ditto","Dragonite");
$random_keys=array_rand($a,5);
echo "Pokemon:" ."  ".$a[$random_keys[0]].", ". $a[$random_keys[1]].", ".$a[$random_keys[2]].", ".$a[$random_keys[3]].", ".$a[$random_keys[4]]."<br>"; 


} 

function homeRegion()
{
$a=array("Kanto","Johto","Hoenn","Sinoh","Unova","Kalos","Alola");
$random_keys=array_rand($a,3);
echo "Region:" ."  ".$a[$random_keys[0]]."<br>";  
} 

function pokeballs()
{
    echo "Inventory:";
    echo " ";
    for($x=0; $x<=4;$x++)
    {
        echo (rand(1,5));
            if($x==1)
            {
                echo "-Pokeball";
                echo " ";
            }
         if($x==2)
            {
                echo "-Great Ball";
                echo " ";
            }
         if($x==3)
            {
                echo "-Ultra Ball";
                echo " ";
            }
         if($x==4)
            {
                echo "-Max Potion";
                echo " ";
            }
    }
}
?>
        
    </head>
<body>
  
<?php

echo trainerName();
echo pokemonTeam();
echo homeRegion();
echo pokeballs();
?>
<figure> 
        <img src="img/pokemonlogo.png" alt="Pokemon Logo" />
            
</figure>

<figure1>
    <img src="img/pokeballs.png" alt="Pokemon Logo" />
</figure1>

</body>
</html>