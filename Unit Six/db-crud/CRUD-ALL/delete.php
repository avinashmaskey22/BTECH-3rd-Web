<?php
require_once 'connect.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    //access granted
    $id = (int)$_GET['id']; //data type casting, also prevents SQL injection

    //Check if id is 0 or negative
    if ($id <= 0) {
        header('location: select.php');
        exit;
    }

    //To check whether the student exists in the database before attempting deletion.
    $sql_1 = "SELECT * FROM students WHERE s_id = " . $id;
    $query_1 = mysqli_query($conn, $sql_1);

    //validates if there is data in a table or not.
    if (mysqli_num_rows($query_1) <= 0) {
        header('location: select.php');
        exit;
    }

    $sql = "DELETE FROM students WHERE s_id = " . $id;
    $query = mysqli_query($conn, $sql);

    if ($query) {
        //success
        header('location: select.php');
        exit;
    } else {
        header('location: select.php');
        exit;
    }
} else {
    header('location: select.php');
    exit;
}
