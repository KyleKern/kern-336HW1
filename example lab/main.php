<?php
    $names = array(
        "Misael Aguilar",
        "Doug Alexander",
        "Tristan Anderson",
        "Erica Au",
        "Sonali Bharat",
        "Lucas Childers",
        "Jack Cousineau",
        "Brandon Cruz",
        "Ediberto Cruz Cruz",
        "Luigi D'Antonio",
        "Ben Dagg",
        "Jessie Dowding",
        "Cristian Galvan",
        "Alan Garcia",
        "Meya Gorbea",
        "Bianca Jaramillo",
        "Matt Johnson",
        "Morgan Juran",
        "Monique La Croix",
        "Scott Ligon",
        "Adrian Martinez",
        "Sean McCarthy",
        "Hardesh Mohar",
        "Daniel Mora",
        "Luis Mora",
        "Bryant Ng",
        "Chris Ngo",
        "Tim Perry",
        "Anna Pomelov",
        "Bryan Rodriguez",
        "Alex Ruvalcaba",
        "Josh Shallow",
        "Mateo Sixtos",
        "Austin Thao",
        "Garrett Tibbetts",
        "Michael Vargas",
        "Ulysses Vega",
        "Edwin Yantis");
        
    $players = array();
    $scores = array();
    $cards = array();
        
    function getPlayers($num){
        global $names, $players;
        
        $players = array_rand($names, $num);
    }
    
    function getHand(){
        global $names, $players, $scores, $cards;
        for($i = 0; $i < count($players); $i++){
            echo  "<h2>" . $names[$players[$i]] . "<h2/>";
            $total = 0;
            while($total < 42){
                $card = rand(1,52);
                while(in_array($card, $cards)){
                    $card = rand(1,52);
                }
                if(($total+(($card%13 == 0 ? 13 : $card%13))) <= 42){
                    $total += $card % 13;
                    if($card < 14){
                        echo "<img src='img/cards/clubs/" . $card . ".png'>";
                    }
                    else if($card < 27){
                        echo "<img src='img/cards/diamonds/" . ($card%13 == 0 ? 13 : $card%13) . ".png'>";
                    }
                    else if($card < 40){
                        if($card%13 == 0){
                            $card = 13;
                        }
                        echo "<img src='img/cards/hearts/" . ($card%13 == 0 ? 13 : $card%13) . ".png'>";
                    }
                    else{
                        if($card%13 == 0){
                            $card = 13;
                        }
                        echo "<img src='img/cards/spades/" . ($card%13 == 0 ? 13 : $card%13) . ".png'>";
                    }
                    $cards[] = $card;
                }
                else{
                    break;
                }
            }
            $scores[] = $total;
            echo "<h1>"."<span style=color:red>".$total ."</span>". "<h1/>";
            echo "<hr> <hr/>";
            echo "<br>";
        }
    }
    
    function displayWinner()
    {
        global $names,$players,$scores;
        $max=0;
        
        for($i = 0; $i < count($players); $i++)
        {
            if($scores[$i]>$max)
            {
               $max=$scores[$i];
               
            }
        }
         for($i = 0; $i < count($players); $i++)
        {
            if($scores[$i]==$max)
            {
               echo "<h1>" . $names[$players[$i]]." Wins!" . "<hr/>";
               echo "<br/>";
            }
        }
    }
?>

<!DOCTYPE html>

<html>
<head>
     <style>
    @import url(styles/style.css);
      
      </style>
       <h1 style="blue; background:gray "> Silver Jack </h1>
     <meta charset="utf-8">
     <title>Lab 3: Silverjack</title>
</head>

<body>
    <hr> 
    <?php
        getPlayers(4);
        getHand();
        displayWinner();
    ?>  
    <hr/>
</body>
    <footer>

     
    <footer/>
</html>
