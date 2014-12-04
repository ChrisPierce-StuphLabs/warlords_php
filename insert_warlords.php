<?php
    //TODO: validate data coming from the database
    //TODO: check the wname xname and yname for unicode wierd characters
 
    
    //new
    session_start();



    function  cleanUpIn(&$wname, &$xname, &$yname) {
       // echo '<div align="center">';
       // echo " " . $wname . $xname . $yname . " ";

        //convert wname, xname, and yname toLower case then strip all numbers and special characters
        $wname = strtolower($wname);
        $xname = strtolower($xname);
        $yname = strtolower($yname);

       // echo '</div>';
     }   



     //this funciton removes numbers from the strings going into mysql database
     function remove_numbers($nonum) {
         $num = array(1,2,3,4,5,6,7,8,9,0);
         return str_replace($num, '', $nonum);
     }




    //check wname, then if ok xname, then if ok yname in nested conditionals bailing out if one's ever not correct         
    function checkWarlord($checkWarlord) {
        switch ($checkWarlord) {
            case "zeus":
                $checkWarlord = "zeus";
                break;
            case "hades":
                $checkWarlord = "hades";
                break;
            case "athena":
                $checkWarlord = "athena";
                break;
            case "hermes":
                $checkWarlord = "hermes";
                break;
            case "aphrodite":
                $checkWarlord = "aphrodite";
                break;
            case "poseidon":
                $checkWarlord = "poseidon";
                break;

            default:
                echo "Your input was crap. Try only the name of a listed warlord. ";
                $checkWarlord = "";
                break;
        }
        return $checkWarlord;
    }



    //format of host/ip, username, password, nameOfDatabase
    $con=mysqli_connect("localhost", "webdbuser", "sillypassword", "warlords");

    //getting the inital values for these from $_POST[''];
    $wname = $_POST['wname'];
    $xname = $_POST['xname'];
    $yname = $_POST['yname'];
    $nonum;

    




    //call cleanUpIn to remove caps
    cleanUpIn($wname, $xname, $yname);
    //echo 'cleaned up the caps: ' . $wname . $xname . $yname;
    

    //this removes any numbers
    $nonum = $wname;
    $wname = remove_numbers($nonum);
    $nonum = $xname;
    $xname = remove_numbers($nonum);
    $nonum = $yname;
    $yname = remove_numbers($nonum);
    //echo 'cleaned up the numbers: ' . $wname . $xname . $yname;


    //this block uses a regular expression to remove all special chars
    $wname = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $wname);
    $xname = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $xname);
    $yname = preg_replace('/[^a-zA-Z0-9_ %\[\]\.\(\)%&-]/s', '', $yname);
    //echo 'cleaned up the special chars: ' . $wname . $xname . $yname;


    //here we use $checkWarlord to call checkWarlord() three times to make sure the sanitized data is actually a warlord
    //an empty string means that warlord did not match anything, and then will cause the insert block to fail. 
    $checkWarlord = $wname;
    $wname = checkWarlord($checkWarlord);

    $checkWarlord = $xname;
    $xname = checkWarlord($checkWarlord);

    $checkWarlord = $yname;
    $yname = checkWarlord($checkWarlord);





    //new
    //using $_SESSION because it's more secure than $_COOKIE
    $_SESSION[''] = $var_value;
    $_SESSION['warlord1'] = $wname;
    $_SESSION['warlord2'] = $xname;
    $_SESSION['warlord3'] = $yname;

    



    //escape variables
    $wname = mysqli_real_escape_string($con, $wname);
    $xname = mysqli_real_escape_string($con, $xname); 
    $yname = mysqli_real_escape_string($con, $yname); 


    //check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }   
  
    
    //use a conditional to make sure wname xname and yname are all not empty, emptyness means checkWarlord() didnt like the input.
    //this is the insert block

    if(!empty($wname) && !empty($xname) && !empty($yname)) {
        //this block actually inserts the sanitized and escaped variables 
        $sql="INSERT INTO warlord_chosen (name)
        VALUES ('$wname')";
        mysqli_query($con, $sql);
    
        $sql="INSERT INTO warlord_chosen (name)
        VALUES ('$xname')"; 
        mysqli_query($con, $sql);
    
        $sql="INSERT INTO warlord_chosen (name)
        VALUES ('$yname')";
    } else {
        echo "had one or more warlords empty. This  means checkWarlords() had an error. ";
    }


    //check for errors on the mysql side
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }   
  
    //echo "3 records added <br /> <a href=warlords.php> click here to go back to warlords. </a>";
    echo "You chose the following warlords: " . $wname . " and " . $xname . " and " . $yname;

    mysqli_close($con);
    
    //here we redirect to warlords.php after the database business is done.
    header('Location: warlords.php');
?>
