<?php
/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

// Database connection
$conn = mysqli_connect("localhost", "root", "", "prac", 3307);

// Update query 
$sql = "UPDATE students 
        SET contact_number = 987654321 
        WHERE full_name = 'Neymar'";

// Executing the query
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Data Updated Successfully.";
} else {
    echo mysqli_error($conn);
}

