<?php
    //format of host/ip, username, password, nameOfDatabase
    $con=mysqli_connect("localhost", "webdbuser", "sillypassword", "testing");

    //check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    //escape variables
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $age = mysqli_real_escape_string($con, $_POST['age']);

    //do the insertion
    $sql="INSERT INTO Persons (FirstName, LastName, Age)
    VALUES ('$firstname', '$lastname', $age)";

    //check for errors
    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    echo "1 record added";
    mysqli_close($con);

?>
