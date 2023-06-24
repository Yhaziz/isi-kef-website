<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Redirect to the login page
header('Location: http://127.0.0.1/isik/index.php');
exit;
?>
