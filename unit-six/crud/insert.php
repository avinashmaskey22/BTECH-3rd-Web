<?php

//db connection
$conn = mysqli_connect("localhost", "root", "", "php_btech", 3307);

//inserting multiple row at a time
$sql = "INSERT INTO details
            (name, address)
            VALUES
            ('Ram Nepali', 'KTM'),
            ('Shyam Nepali', 'BRT'),
            ('Sita Nepali', 'Het')
        ";

//executing a SQL query
$query = mysqli_query($conn, $sql); //this function returns true or false

if ($query) {
    //success
    echo "Data Inserted Successfully.";
} else {
    echo mysqli_error($conn); //this function prints db errors
}
