<?php

    //TODO: fix the large empty space between the submit button and the table drawn from the database.
    //TODO: validate data coming from the database
    //TODO: make array of randomly chosen warlords for the ai player
    //TODO: write attack(); //attack and defend both rely on chosen[] array
    //TODO: write defend();
    //TODO: write egyptian gods
    //TODO: fix the undefined constants warnings, and the undefined vars and the undefined indexes




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





    public static function attack($party, $aiParty) {


        echo $party[0]->currentHp;

        //$aitemp = ;
        //if() {
            

        //}    

    }//end of attack()

    public static function defend($party, $aiParty) {
    

    }//end of defend()


     //new
     //echo ' <div align="center">zeus total hp is: ' . $zeus->totalHp . '</div>';
     //$_SESSION[""] contains text that must then be used to assign an object that matches its' name
     //use a loop to iterate through 0 then 1 then 2 then end. if an error is found anywhere, then default:

     public static function choice(&$chosen, &$party) {
         $i = 0;
         while($i < 3) {
             $temp = $chosen[$i]; 
             //if(!empty($temp)) {
  
                 if($temp == "zeus") {
                     $party[$i] = new zeus();
                     $zeusvar = $party[$i];
                     echo" total Hp is: " .  $party[$i]->totalHp;
                     $i++;
                 }  
                 if($chosen[$i] == "hades") {
                     $party[$i] = new hades();
                     $hadesvar = $party[$i];
                     //echo " total Hp is: " . $hadesvar->totalHp;  
                     $i++;
                 }  
                 if($chosen[$i] == "athena") {
                     $party[$i] = new athena();
                     $athenavar = $party[$i];
                     //echo " total Hp is: " . $athenavar->totalHp;   
                     $i++;
                 }  
                 if($chosen[$i] == "hermes") {
                     $party[$i] = new hermes();
                     $hermesvar = $party[$i];
                     //echo " total Hp is: " . $hermesvar->totalHp; 
                     $i++;
                 } 
                 if($chosen[$i] == "aphrodite") {
                     $party[$i] = new aphrodite();
                     $aphroditevar = $party[$i];
                     //echo " total Hp is: " . $aphroditevar->totalHp; 
                     $i++;
                 }  
                 if($chosen[$i] == "poseidon") {
                     $party[$i] = new poseidon();
                     $poseidonvar = $party[$i];
                     //echo " total Hp is: " . $poseidonvar->totalHp; 
                     $i++;
                 } 
                 else { 
                     //echo "errrrrrrrrrrorrrrrrrrrrr ";
                     $i++;
                 }//end else 
  
             //}//end of if(!empty())     
  
         }//end of while

     }//end of choice()
     
     
   
    //pass this the array of chosen warlords from the player
    function who() {
        if(isset($_SESSION["warlord1"]) && isset($_SESSION["warlord2"]) && isset($_SESSION["warlord3"])) {
            echo '<div id="chosen"><p> </p> <br /> <br />Your selected warlords are: ' . $_SESSION["warlord1"] . ", " . $_SESSION["warlord2"] . 
	        " and " . $_SESSION["warlord3"] . '</div>'; 
        }
    }//end of who()  


    //here we check the output from the database
    public static function validateOut() {

    }


   
    //new part that I need help starts here
    //trying to pass $aiParty array of objects and $party array of objects
    public static function setCurrent(&$aiParty, &$party) {
        $i = 0;   
       
        //it's saying that its an empty property and therefor cannot access it.
        $TempHp0 = $aiParty[0]->currentHp;
        $TempHp1 = $aiParty[1]->currentHp;
        $TempHp2 = $aiParty[2]->currentHp;
   
        echo $aiParty[0]->currentHp;
        
       /* while() {
            if() {
          
            }
        } */
    } 



}//end of warlord




    class zeus extends warlord{
        function __construct() {
            parent:: __construct(name, totalHp, currentHp, attack, defence, type, isTurn);
            $this->name = "zeus";
            $this->totalHp = 100;
            $this->currentHp = 500;
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
            $this->currentHp = 500;
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
            $this->currentHp = 500;
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
            $this->currentHp = 500;
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
            $this->currentHp = 500;
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


    //use a function to return a random value, corelate that value with a warlord.
    $aiWarlord1 = new warlord();
    $aiWarlord2 = new warlord();
    $aiWarlord3 = new warlord();
    $aiParty = array($aiWarlord1, $aiWarlord2, $aiWarlord3);




    //new
    //fill $chosen[] with the text from $_SESSION[""]
    //strangely getting undefined index of warlord1-3 yet still having it work fine....... Weird..
    $chosen = array($_SESSION["warlord1"], $_SESSION["warlord2"], $_SESSION["warlord3"]);


    //party will be the array of instances of the class. This will actually be the warlords, not just the names of them.
    $party = array($warlord1, $warlord2, $warlord3);




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

    warlord::choice($chosen, $party);


    echo' <div align="center">
    <img src="zeus.jpg" height="100" width="100" hspace="3"> </img>
    <img src="hades.jpg" height="100" width="100" hspace="3"> </img>
    <img src="athena.jpg" height="100" width="100" hspace="3"> </img>
    <img src="hermes.jpg" height="100" width="100" hspace="3"> </img>
    <img src="aphrodite.jpg" height="100" width="100" hspace="3"> </img>
    <img src="poseidon.jpg" height="100" width="100" hspace="3"> </img>
    </div>

    <div align="center" class="buttons"> <p> </p> 
    <button type="button">____Zeus___</button>
    <button type="button">__Hades____</button> 
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
 
    /*<!--action="insert_warlords.php" 
    action="warlords.php"  Dont forget to refresh the page.-->*/

    echo '<form action="insert_warlords.php" method="post"><br /><br /> 
    Name of First Warlord:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="wname"><br />
    Name of the Second Warlord: <input type="text" name="xname"><br />
    Name of the Third Warlord: &nbsp;<input type="text" name="yname"><br />

    <br />
    <input type="submit">
    </form>
    ';



    //order goes zeus hades athena hermes aphrodite poseidon
    /* //uncomment to check values from classes.
    echo '<div align="center">' .  "$zeus->name" .  " " . "$zeus->currentHp" . "<p> </p>";
    echo "$hades->name" . "$hades->currentHp" . "<p></p>";
    echo "$athena->name" . "$athena->currentHp" . "<p></p>";
    echo "$hermes->name" . "$hermes->currentHp" . "<p></p>";
    echo "$aphrodite->name" . "$aphrodite->currentHp" . "<p></p>";
    echo "$poseidon->name" . "$poseidon->currentHp" . "<p></p>";
    */




    //here were getting session data from insert_warlords.php
    //echo '<div align="center"> You chose: ' . $_SESSION["warlord1"] ." " . $_SESSION["warlord2"] . " " . $_SESSION["warlord3"]. '</div>';
    $warlord1 = $_SESSION["warlord1"];
    $warlord2 = $_SESSION["warlord2"];
    $warlord3 = $_SESSION["warlord3"];



    //new
    //at this point $chosen[] should be an array of objects instead of text
    //create selected[] array and fill it with the objects that correspond to names in $chosen[]
    //echo '<div align="center">' . " party array contains: " . $party[0]->$name . " " . $party[1]->$name . " ". $party[2]->$name;
    //echo '<p> Total hp of ' . $party[0] . " is " . $party[0]->$totalHp . '</div>';



    
    //here we check if the strings are empty.
    if(!empty($warlord1) && !empty($warlord2) && !empty($warlord3)) { 
        warlord::who(); 
    } else {
        echo '<div align="center"> One or more warlords was empty! </div>';    
    }


    //why on earth is there such a large empty space between submit and the table....?
    //change to fights table once game is more developed..
    $result = mysqli_query($connect,"SELECT * FROM warlord_chosen");



    /*very possibly buggy code here
    $getChosen = mysqli_query($connect, "
        SELECT * FROM (SELECT * FROM warlords_chosen WHERE postID='$id' AND state='0' ORDER BY id DESC LIMIT 3) t ORDER BY id ASC;");
    echo $getChosen;
    */

    



    //the larger the table gets, the more spaced from the form it gets... weird.
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
 
   
    //call the new code here.
    warlord::setCurrent($aiParty, $party);

    warlord::attack($aiParty, $party);

    //echo 'this is a test: ' . $party[0]->name;


    echo '
    </body> 
    </html> ';   

     mysqli_close($connect);
?>
