<?php
// Start the session
session_start();

// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// echo "Session variables are set";

$_SESSION['count'] = $_SESSION['count'] ?? 1;
$_SESSION['count']++;
echo $_SESSION['count'];
