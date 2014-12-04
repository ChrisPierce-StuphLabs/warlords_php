<?php
//this code shows how to insert data into a mysql database.
/*INSERT INTO table_name
VALUES (val1, val2, val3);

//second way to do insertion
INSERT INTO table_name (column1, column2, column3)
VALUES (val1, val2, val3);        
*/

//the format goes host, username, password, name_of_database
$con = mysqli_connect("localhost", "webdbuser", "sillypassword", "testing");

//trying to parse the content of the variables into sql commands
$fname = "Michael";
$lname = "McGreggor";
$age = "7777777";

//check the connection
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//this code seems to throw up errors...... 
//int mysql_num_rows ( resource $result );
    
//remember to use single quotes to interpret the variable into it's contents
mysqli_query($con, "INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$fname', '$lname', '$age')");

mysqli_query($con, "INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('General', 'Disarray', 10)");

mysqli_close($con);


?>
