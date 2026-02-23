<?php
/* Follow this steps to execute a query in database(manadate):
    a. Connect with db server and select your db
    b. Write SQL. For php, SQL are strings
    c. Execute SQL
    d. Optional. Fetch your data.
*/

// Database connection
$conn = mysqli_connect("localhost", "root", "", "prac", 3307);

// Delete query
$sql = "DELETE FROM students WHERE s_id = 2";

// Executing the query
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Data Deleted Successfully.";
} else {
    echo mysqli_error($conn);
}
