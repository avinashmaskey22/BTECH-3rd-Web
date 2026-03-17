<?php
$conn = mysqli_connect("localhost", "root", "", "php_btech", 3307);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// SQL query to create the 'students' table
$sql = "CREATE TABLE details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL
)";

$query = mysqli_query($conn, $sql);
// Execute the query
if ($query) {
    echo "Table 'student_info' created successfully.";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>
