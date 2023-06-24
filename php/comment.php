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

// Retrieve the comments from the database
$sql = "SELECT comment, date FROM tbl_comment ORDER BY comment_id DESC";
$result = mysqli_query($conn, $sql);

// Display the comments in an unordered list
if (mysqli_num_rows($result) > 0) {
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li> " . $row["comment"] . "<br><small>" . $row["date"] . "</small></li>";
    }
    echo "</ul>";
} else {
    echo "No comments yet.";
}

// Close the database connection
mysqli_close($conn);






?>