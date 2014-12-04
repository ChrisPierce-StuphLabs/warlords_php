<?php

    //TODO: fix the large empty space between the submit button and the table drawn from the database.
    //TODO: make array of randomly chosen warlords for the ai player
    //TODO: write attack();
    //TODO: write defend();
    //TODO: write egyptian gods..... EVENTUALLY..........
    //TODO: write roman gods (which are just variants of the greek ones)..... EVENTUALLY..........
    //TODO: fix the undefined constants warnings, and the undefined vars and the undefined indexies
    //TODO: write function that randomly assigns 3 warlords to $aiParty[] array


    //new
    session_start();

class warlord{
    public $name;
    public $totalHp;
    public $currentHp;
    public $attack;
    public $defence;
    public $type;
    public $isTurn;
    public $isCurrent;  

    //removed passing them the properties of warlord, the parent class beause it generated less warnings this way.
    public function __construct() {
        $this->name = $name;
        $this->totalHp = $totalHp;
        $this->currentHp = $currentHp;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->type = $type;
        $this->isTurn = $isTurn;
        $this->isCurrent = $isCurrent;
    }// end __construct()



    //1 = Zeus, 2 = Hades, 3 = Athena , 4 = Hermes ,5 = Aphrodite ,6 = Posiedon
    public static function ask() {
        echo '<div align="center" id="greeting"> <h3> Welcome to Warlords! Please choose your 3 Warlords: </h3></div>';
    }




    public static function attack(&$party, &$aiParty, &$chosen) {


    }//end of attack()



    public static function defend(&$party, &$aiParty) {
    

    }//end of defend()




    //new
    //$_SESSION[""] contains text that must then be used to assign an object that matches its' name
    //cant use a loop to iterate through 0 then 1 then 2 then end because $_SESSION[""] isnt indexed. 
    //If an error is found anywhere, then default:
  
    public static function choice($chosen, &$party) {
        $i = 0;
        if($_SESSION["warlord1"] == "zeus") {         $party[0] = new zeus();
        //echo'<div align="center">' . " total Hp is: " .  $party[0]->totalHp . '</div>';
        $i++;
        } 
 
        else if($_SESSION["warlord1"] == "hades") {
        $party[0] = new hades();
        //echo'<div align="center">' . " total Hp is: " .  $party[0]->totalHp . '</div>';
        $i++;
        }  

        else if($_SESSION["warlord1"] == "athena") {
        $party[0] = new athena();
        //echo'<div align="center">' . " total Hp is: " .  $party[0]->totalHp . '</div>';
        $i++;
        } 
 
        else if($_SESSION["warlord1"] == "hermes") {
        $party[0] = new hermes();
        //echo'<div align="center">' . " total Hp is: " .  $party[0]->totalHp . '</div>';
        $i++;
        }
 
        else if($_SESSION["warlord1"] == "aphrodite") {
        $party[0] = new aphrodite();
        //echo'<div align="center">' . " total Hp is: " .  $party[0]->totalHp . '</div>';
        $i++;
        } 
     
        else if($_SESSION["warlord1"] == "poseidon") {
        $party[0] = new poseidon();
        //echo'<div align="center">' . " total Hp is: " .  $party[0]->totalHp . '</div>';
        $i++;
        } else {
            echo '<div align="center">' . "Your first warlord did not match any valid warlords. ";
            echo "You entered: " . $_SESSION["warlord1"] . '</div>';
        }
    
    

        //part 2
        if($_SESSION["warlord2"] == "zeus") {
        $party[1] = new zeus();
        //echo'<div align="center">' . " total Hp is: " .  $party[1]->totalHp . '</div>';
        $i++;
        } 
 
        else if($_SESSION["warlord2"] == "hades") {
        $party[1] = new hades();
        //echo'<div align="center">' . " total Hp is: " .  $party[1]->totalHp . '</div>';
        $i++;
        }  

        else if($_SESSION["warlord2"] == "athena") {
        $party[1] = new athena();
        //echo'<div align="center">' . " total Hp is: " .  $party[1]->totalHp . '</div>';
        $i++;
        } 
 
        else if($_SESSION["warlord2"] == "hermes") {
        $party[1] = new hermes();
        //echo'<div align="center">' . " total Hp is: " .  $party[1]->totalHp . '</div>';
        $i++;
        }
 
        else if($_SESSION["warlord2"] == "aphrodite") {
        $party[1] = new aphrodite();
        //echo'<div align="center">' . " total Hp is: " .  $party[1]->totalHp . '</div>';
        $i++;
        } 
     
        else if($_SESSION["warlord2"] == "poseidon") {
        $party[1] = new poseidon();
        //echo'<div align="center">' . " total Hp is: " .  $party[1]->totalHp . '</div>';
        $i++;
        } else {   
            echo '<div align="center">' . "Your second warlord did not match any valid warlords. ";
            echo "You entered: " . $_SESSION["warlord2"] . '</div>';
        }
  
  
    
        //part 3
        if($_SESSION["warlord3"] == "zeus") {
        $party[2] = new zeus();
        //echo'<div align="center">' . " total Hp is: " .  $party[2]->totalHp . '</div>';
        $i++;
        } 
 
        else if($_SESSION["warlord3"] == "hades") {
        $party[2] = new hades();
        //echo'<div align="center">' . " total Hp is: " .  $party[2]->totalHp . '</div>';
        $i++;
        }  

        else if($_SESSION["warlord3"] == "athena") {
        $party[2] = new athena();
        //echo'<div align="center">' . " total Hp is: " .  $party[2]->totalHp . '</div>';
        $i++;
        } 
 
        else if($_SESSION["warlord3"] == "hermes") {
        $party[2] = new hermes();
        //echo'<div align="center">' . " total Hp is: " .  $party[2]->totalHp . '</div>';
        $i++;
        }
 
        else if($_SESSION["warlord3"] == "aphrodite") {
        $party[2] = new aphrodite();
        //echo'<div align="center">' . " total Hp is: " .  $party[2]->totalHp . '</div>';
        $i++;
        } 
     
        else if($_SESSION["warlord3"] == "poseidon") {
        $party[2] = new poseidon();
        //echo'<div align="center">' . " total Hp is: " .  $party[2]->totalHp . '</div>';
        $i++;
        } else {
            echo '<div align="center">' . "Your third warlord did not match any valid warlords. ";
            echo "You entered: " . $_SESSION["warlord3"] . '</div>';
        } 
  
     }//end of choice()
     
     
   
    //pass this the array of chosen warlords from the player
    function who() {
        if(isset($_SESSION["warlord1"]) && isset($_SESSION["warlord2"]) && isset($_SESSION["warlord3"])) {
            echo '<div id="chosen"><p> </p> <br /> <br />Your selected warlords are: ' . $_SESSION["warlord1"] . ", " . $_SESSION["warlord2"] . 
	        " and " . $_SESSION["warlord3"] . "." .  '</div>'; 
        }
    }//end of who()  


   
    public static function setAiCurrent(&$aiParty) {
        $i = 0;   
   
        echo $aiParty[0]->currentHp;
        
        while($aiParty[$i]->currentHp < 1 && $i < 3) {
            $i++;
            if($aiParty[$i]->currentHp > 0) {
                $aiParty[$i]->isTurn = true;
            }
        }
        echo "Your current warlord is: " . $aiParty[$i]->name;
    }//end setAiCurrent() 




    public static function setPartyCurrent(&$party) {
        $i = 0;   
   
        echo $party[0]->currentHp;
        
        while($party[$i]->currentHp < 1 && $i < 3) {
            $i++;
            if($party[$i]->currentHp > 0) {
                $party[$i]->isTurn = true;
            }
        }
        echo "Your current warlord is: " . $party[$i]->name;
    }//end setPartyCurrent() 




}//end of warlord class




    class zeus extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "zeus";
            $this->totalHp = 100;
            $this->currentHp = 100;
            $this->attack = 25;
            $this->defence = 4;
            $this->type = "electric";
            $this->isTurn = false;
            $this->isCurrent = false;
        }
    }

    class hades extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "hades";
            $this->totalHp = 200;
            $this->currentHp = 200;
            $this->attack = 25;
            $this->defence = 4;
            $this->type = "fire";
            $this->isTurn = false;  
            $this->isCurrent = false;
        }
    }

    class athena extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "athena";
            $this->totalHp = 300;
            $this->currentHp = 300;
            $this->attack = 25;
            $this->defence = 4;
            $this->type = "wisdom";
            $this->isTurn = false;
            $this->isCurrent = false;
        }
    }

    class hermes extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "hermes";
            $this->totalHp = 400;
            $this->currentHp = 400;
            $this->attack = 25;
            $this->defence = 4;
            $this->type = "warrior";
            $this->isTurn = false;
            $this->isCurrent = false;
        }
    }

    class aphrodite extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "aphrodite";
            $this->totalHp = 500;
            $this->currentHp = 500;
            $this->attack = 25;
            $this->defence = 4;
            $this->type = "love";
            $this->isTurn = false;
            $this->isCurrent = false;
        }
    }

    class poseidon extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "poseidon";
            $this->totalHp = 600;
            $this->currentHp = 600;
            $this->attack = 25;
            $this->defence = 4;
            $this->type = "water";
            $this->isTurn = false;
            $this->isCurrent = false;
        }
    }


    //here are the objects created of the warlords.
    //format goes name totalHp currentHp attack defence type isTurn 
    //$zeus = new zeus("zeus", 500, 500, 25, 4, "electric", false);
    $zeus = new zeus();
    $hades = new hades();
    $athena = new athena();
    $hermes = new hermes();
    $aphrodite = new aphrodite();
    $poseidon = new poseidon();



    //here are the warlords that have been chosen by the player
    //$warlord1 = new warlord();
    //$warlord2 = new warlord();
    //$warlord3 = new warlord();





    /* Use the single quotes when echoing html, so that the double quotes in the tags don't interfere. */
      function makeSkeleton() {
        echo '<!DOCTYPE html>
            <html>  
                <head>
                    <link type="text/css" rel="stylesheet" href="stylesheet.css">
                </head>
                <body> 
                <p> </p>';
 
        
    } // end makeSkeleton()

    //draw skeleton of the html
    makeSkeleton();		

    warlord::ask();





    //$party array is empty for some reason.
    warlord::choice($chosen, $party);
 
    warlord::attack($party, $aiParty, $chosen);




    echo' <div align="center">
    <img src="zeus.jpg" height="100" width="100" hspace="3" title="Hp: 100"> </img>
    <img src="hades.jpg" height="100" width="100" hspace="3" title="Hp: 200"> </img>
    <img src="athena.jpg" height="100" width="100" hspace="3" title="Hp: 300"> </img>
    <img src="hermes.jpg" height="100" width="100" hspace="3" title="Hp: 400"> </img>
    <img src="aphrodite.jpg" height="100" width="100" hspace="3" title="Hp: 500"> </img>
    <img src="poseidon.jpg" height="100" width="100" hspace="3" title="Hp: 600"> </img>
    </div>

    <div align="center" class="buttons"> <p> </p> 
    <button type="button">___Zeus____</button>
    <button type="button">___Hades___</button> 
    <button type="button">__Athena___</button> 
    <button type="button">__Hermes___</button> 
    <button type="button">_Aphrodite_</button> 
    <button type="button">_Poseidon__</button>  
    </div>'; 
   

    //new
    //format of host/ip, username, password, nameOfDatabase
    $connect=mysqli_connect("localhost", "webdbuser", "sillypassword", "warlords");

    //check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
       /*echo ' <div align="center">connection succeeded. */echo '</div>';
    }



    echo '<div align="center">'; 
 

    echo '<form action="insert_warlords.php" method="post"><br /><br /> 
    Name of First Warlord:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="wname"><br />
    Name of the Second Warlord: <input type="text" name="xname"><br />
    Name of the Third Warlord: &nbsp;<input type="text" name="yname"><br />

    <br />
    <input type="submit">
    </form>
    ';



    //here were getting session data from insert_warlords.php
    //echo '<div align="center"> You chose: ' . $_SESSION["warlord1"] ." " . $_SESSION["warlord2"] . " " . $_SESSION["warlord3"]. '</div>';
    $warlord1 = $_SESSION["warlord1"];
    $warlord2 = $_SESSION["warlord2"];
    $warlord3 = $_SESSION["warlord3"];




    //use a function to return a random value, corelate that value with a warlord.
    $aiWarlord1 = new warlord();
    $aiWarlord2 = new warlord();
    $aiWarlord3 = new warlord();
    $aiParty = array($aiWarlord1, $aiWarlord2, $aiWarlord3);




    //new
    //fill $chosen[] with the text from $_SESSION[""]
    $chosen = array($_SESSION["warlord1"], $_SESSION["warlord2"], $_SESSION["warlord3"]);


    
    //here we check if the strings are empty.
    if(!empty($warlord1) && !empty($warlord2) && !empty($warlord3)) { 
        warlord::who(); 
    } else {
        echo '<div align="center"> One or more warlords was empty! </div>';    
    }


    //why on earth is there such a large empty space between submit and the table....?
    //change to fights table once game is more developed..
    $result = mysqli_query($connect,"SELECT * FROM warlord_chosen");



    //set history to true to show the contents of the mysql warlordchosen table.
    $history = false;
    if ($history == true) {
        echo '<table border="1">
        <tr>
        <th>name</th>
        </tr>';

        while($row = mysqli_fetch_array($result)) {
          echo "<tr> " . "<td>" . $row['name'] . "</td>";
          echo "</tr> <br>";
        }
    
    }
    echo "<span>";
   
    //call the new code here.
   

    //new
    warlord::setAiCurrent($aiParty);
    warlord::setPartyCurrent($party);


    warlord::attack($party, $aiParty, $chosen);



    echo '
    </span>
    </body> 
    </html> ';   

     mysqli_close($connect);
?>
