<?php
    //this php site is designed to access a mysql database and do stuff with it's data.

    //create connection
	    $con=mysqli_connect("localhost", "webdbuser", "sillypassword", "testing");
    
    //checking the connection
    if(mysqli_connect_errno()) {
        echo "failed to connect to MYSQL: " . mysqli_connect_error();
    }   

    //if we get to this point, then no errors so far.
    //create tables
    $sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";
    
    //do the query
    if (mysqli_query($con,$sql)) {
        echo "table persons created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }

     
 
?>
