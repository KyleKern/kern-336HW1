<?php

function randomize(){
    $starters1 = array("charmander","blubasaur","squirtle","rattatta","eevee","chikorita","cyndaquil","totodile","maril");
    $starters2 = array("Treecko","Torchic","Mudkip","Ralts","turtwig","chimchar","piplup","snivy","tepig","oshawott");
    
    array_push($starters1,"Pikachu");
    array_push($starters2,"rowlett");
    $randostarter1 = $starters1[mt_rand(0,count($starters1)-1)];
    $randostarter2 = $starters2[mt_rand(0,count($starters2)-1)];
    $rannum = mt_rand(0,20);
    $rannum2 = mt_rand(0,10);
    echo '<br />';
    echo '<br />';
    echo '<br />';
    
    if( $rannum > 10){
        echo '<span id="selection1">';
    } else{
        echo '<span id="selection2">';
    }
    echo '<strong>';
    for($i = 0; $i < 3; $i++){
        echo '|';
    }
    echo 'Your first partner is ';
    echo ($randostarter1);
    echo '</span>';
    echo '<span id="selection3">';
    echo ' your secondary is ';
    echo '</span>';
    if($rannum2 > 5){
        echo '<span id="selection1">';
    } else{
        echo '<span id="selection2">';
    }
    echo ($randostarter2);
    for($i = 0; $i < 3; $i++){
        echo '|';
    }
    echo '</span>';
    echo '</strong>';

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Pokemon Partner Picker</title>
        <style>
        @import url("css/styles.css");
        </style>
    </head>
    
    <body>
        <center><h1>Pokemon Partner Picker</h1></center>
        <center><div id="box">
            <?=randomize()?>
        </div></center>
        <br />
        <img src="https://cdn.bulbagarden.net/upload/thumb/0/0d/025Pikachu.png/250px-025Pikachu.png" alt="Pikachu">
    </body>
    <br />
    <br />
    <footer>
    2017 &copy; Kyle Kern.
    <br />
    Disclaimer: All material above is used for teaching purposes.  Information might be inaccurate.
    <br />
    <img src="Homework2/img/logo.jpg" alt="CSUMB logo" />
</footer>
</html>