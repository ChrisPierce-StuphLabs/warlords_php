<?php

//TODO: fix first two variables wname, and xname so that they are inserted into mysql database properly.
//TODO: fix logic of the submit button so it displays its' echo when satisfied.


class warlord{
    public $name;
    public $totalHp;
    public $currentHp;
    public $attack;
    public $defence;
    public $type;
    public $isTurn;  

    public function __construct($name, $totalHp, $currentHp, $attack, $defence, $type, $isTurn) {
        $this->name = $name;
        $this->totalHp = $totalHp;
        $this->currentHp = $currentHp;
        $this->attack = $attack;
        $this->defence = $defence;
        $this->type = $type;
        $this->isTurn = $isTurn;
    }// end __construct()

  //1 = Zeus, 2 = Hades, 3 = Athena , 4 = Hermes ,5 = Aphrodite ,6 = Posiedon
  public static function ask() {
      echo '<div align="center" id="greeting"> <h3> Welcome to Warlords! Please choose your 3 Warlords: </h3></div>';
  }


  /*
  public static function choose() {
    $warlord_1; 
    $warlord_2;
    $warlord_3;

  } //end of choose()
  */

  //array of warlords chosen does here
  //$chosen = array();

  //end array



  public static function attack() {

  }//end of attack()

  public static function defend() {

  }//end of defend()

  public static function who() {
    echo "Your selected warlords are: "; 

  }//end of who()  

}//end of warlord

class zeus extends warlord{
    function __construct() {
        parent:: __construct();
    }
}
class hades extends warlord{
    function __construct() {
        parent:: __construct();
    }

}
class athena extends warlord{
    function __construct() {
        parent:: __construct();
    }

}
class hermes extends warlord{
    function __construct() {
        parent:: __construct();
    }

}
class aphrodite extends warlord{
    function __construct() {
        parent:: __construct();
    }

}
class poseidon extends warlord{
    function __construct() {
        parent:: __construct();
    }

}


/* Use the single quotes when echoing html, so that the double quotes in the tags don't interfere. */

  function makeSkeleton() {
    echo '<!DOCTYPE html>
            <html>  
                <head>
                    <link type="text/css" rel="stylesheet" href="stylesheet.css">
                </head>
                <body> 
                    <!--This text should never be seen by anyone but the developer. -->
                <p> </p>';
 
        
} // end makeSkeleton()

makeSkeleton();		//draw the skeleton of the html

warlord::ask();

//warlord::choose();

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
       echo ' <div align="center">connection succeeded. </div>';
    }


    //new
    echo $result;
    $result = mysqli_query($connect, "SELECT * FROM warlord_chosen ORDER BY val limit 3");






    echo '<div align="center">' . $result ; 
 
    /*<!--action="insert_warlords.php" 
    action="warlords.php"  Dont forget to refresh the page.-->*/

    echo '<form action="insert_warlords.php" method="post"><br /><br /> 
    Name of first warlord:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="wname"><br />
    Name of the Second Warlord: <input type="text" name="xname"><br />
    Name of the Second Warlord: <input type="text" name="yname"><br />

    <br />
    <input type="submit">
    </form>

    <!-- strangely nc -v -l 3307 shows all of them, but then only puts the third one into the database... -->    



    </div>';



   

    echo '
    </body> 
    </html> ';   


     mysqli_close($connect);
    //end new

 
    
?>
