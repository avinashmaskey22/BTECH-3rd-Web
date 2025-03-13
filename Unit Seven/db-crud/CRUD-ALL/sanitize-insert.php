<?php
/* Steps to follow in php database:
        a. Connect db server and select your db to perform the tasks
        b. Write SQL, for php SQL is string data
        c. Execute SQL
        d. Optional. Fetch your data
    */

//databse connection
require_once 'connect.php';

if (isset($_POST) && !empty($_POST)) {

    // Sanitizing inputs before inserting data into database (For Security)
    $full_name = htmlentities($_POST['uname']);
    $email = filter_var($_POST['uemail'], FILTER_SANITIZE_EMAIL);
    $address = htmlentities($_POST['uaddress']);
    $contact_number = htmlentities($_POST['unum']);

    // Insert query
    $sql = "INSERT INTO students
        SET
        full_name = '" . $full_name . "', 
        email = '" . $email . "', 
        address = '" . $address . "', 
        contact_number = " . $contact_number;

    if (mysqli_query($conn, $sql)) {
        echo "Student added successfully.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);


/* After Boards, Research About die function in PHP and Prepared Statements in MySQL */