<!DOCTYPE html>
<html>
    <head>
        <title>Password Generator</title>
    </head>
<body>

    <div id = "container">

        <?php
        
        function randomize(){
            
            $password='';
            $letters = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
            $numbers = array("0","1","2","3","4","5","6","7","8","9");
            $lettersrand=rand(5,10);
            $numbersrand= rand(1,3);
            for($i=0;$i<$lettesrand;$i++){
                $ranletter .= "". mt_rand(0,count($letters)-1);
                $password += $letters[$i];
            
                if($numbersrand>0){
                   $rannum .= mt_rand(0,count($numbers)-1);
                    $password +=$numbers[$i];
                }
            }
            
            echo $password;
        }
       
        echo "<table width= 400>";
            
                for ($i = 1; $i <=25; $i++ ){
                    echo "<tr>";
                    
                    echo "<td>".randomize() ."</td>";
                    
                    echo"</tr>";
                } 

        echo "</table>";
                
            
        
        
        ?>
    </div>
</body>
</html>