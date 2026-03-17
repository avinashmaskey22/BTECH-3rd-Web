<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "php_btech", 3307);

// Delete query
$sql = "DELETE FROM details WHERE id = 2";

// Executing the query
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Data Deleted Successfully.";
} else {
    echo mysqli_error($conn);
}
