<?php

    //this code is not standalone, but it sets the PID field as the primary key field
    $sql = "CREATE TABLE people
    (
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    FirstName CHAR(15), 
    LastName CHAR(15), 
    Age INT
    )";

?>
