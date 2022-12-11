<?php
// What is a session?
// Used to manage information across difference pages

// Verify the user login info
session_start();
$_SESSION['username'] = "Neer";
$_SESSION['favCat'] = "Movies";
echo "We have saved your session";
?>
