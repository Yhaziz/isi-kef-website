<?php

// create a connection to the database
$servername = "localhost"; // servername is usually "localhost"
$username = "root"; // enter your MySQL username
$password = ""; // enter your MySQL password
$dbname = "dbisik"; // enter the name of your database

// Establish a connection to your database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the comment data from the form
$comment = $_POST['comment'];

// Insert the comment into the database
$sql = "INSERT INTO tbl_comment (comment, date) VALUES ('$comment', NOW())";
if (mysqli_query($conn, $sql)) {
    echo "Comment added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);






?>