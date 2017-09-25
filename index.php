<!DOCTYPE html>
<html>
    <head>
<<<<<<< HEAD
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
=======
        <title>"Home page"</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <h1>Programming Facts</h1>
        </header>
        <nav> 
           <div id="selection">
            <a href="index.php"><strong> Home </strong></a>
            <a href="Cplus.html"> C++  </a>
            <a href="java.html"> Java </a>
             <a href="python.html"> Python </a>
            <a href="contact.html">Contact</a>
            </div>
        </nav>
        <br /><br />
        <main>
            <figure id="me">
                <img src="coding-types.jpg" width="640" height="360" alt="Logo for C++" />
            </figure>
            
            <div id="welcomeText">
                Hello! <br/>
                <p>C++ is a very useful and wide spread programming language. Some ways it is used is in game programming with directX, and you can even use it for simpler programming</p>
                <p> on the pages ill go into more depth about what kinds of programming you can do with C++</p>
                <br /><br />
            </div>
            <div style="clear: both;" />
        </main>
        <footer>
            <hr>
            Internet programming 2017 Kern <br />
            <strong>
                Disclamer: </strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only
            <figure id="csumb">
                <img src="Cal-State-Monterey-Bay.jpg" width="100" height="50" alt="csumb logo" />
            </figure>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->
>>>>>>> bbe9538815c180ad965af8d124fa97dde4ebd8ae
