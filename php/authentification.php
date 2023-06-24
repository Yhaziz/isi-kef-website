<?php
// Start the session
session_start();

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "dbisik"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user input from HTML form
$np= $_POST['np'];
$me= $_POST['me'];
$pass = $_POST['pass'];

// Sanitize the user input 
//mysqli_real_escape éviter les attaques par injection SQL.
$np = mysqli_real_escape_string($conn, $np);
$me = mysqli_real_escape_string($conn, $me);
$pass = mysqli_real_escape_string($conn, $pass);

// Hash the password for security
$pass = md5($pass);

// Check if the user exists in the database
$sql = "SELECT * FROM inscription WHERE np = '$np' AND me = '$me' AND pass = '$pass'";
$result = mysqli_query($conn, $sql);

// If the user exists, create a session variable and redirect to the home page
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['np'] = $row['np'];
    header("Location: http://127.0.0.1/isik/index.php");
} else {
    // If the user does not exist, display an error message
    echo "<script>alert('Invalid nom or email or password !'); window.location.href = 'http://127.0.0.1/isik/connexion.php';</script>";
}

// Close database connection
mysqli_close($conn);
?>
