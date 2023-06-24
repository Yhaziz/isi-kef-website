<?php
// create a connection to the database
$servername = "localhost"; // servername is usually "localhost"
$username = "root"; // enter your MySQL username
$password = ""; // enter your MySQL password
$dbname = "dbisik"; // enter the name of your database

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get the values from the form
    $cin = $_POST["cin"];
    $np = $_POST["np"];
    $mp = $_POST["mp"];
    $me = $_POST["me"];
    $pass =md5($_POST["pass"]);
    $confpass =md5($_POST["confpass"]);
    $role = $_POST["user"];

    // check if the user already exists
    $user_exists = mysqli_query($conn, "SELECT * FROM inscription WHERE cin='$cin'");
    if (mysqli_num_rows($user_exists) > 0) {
        echo "<script>alert('L utilisateur avec ce cin existe déjà.'); window.location.href = 'http://127.0.0.1/isik/connexion.php';</script>";
    } else {
        // insert the values into the "inscription" table
        $sql = "INSERT INTO inscription (cin, np, mp, me, pass, confpass , user)
                VALUES ('$cin', '$np', '$mp', '$me', '$pass','$confpass', '$role')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Successfully Registered !'); window.location.href = 'http://127.0.0.1/isik/connexion.php';</script>";
        } else {
            echo "<script>alert('Erreur: " . mysqli_error($conn) . "');</script>";
        }
    }
}

// close the database connection
mysqli_close($conn);
?>
