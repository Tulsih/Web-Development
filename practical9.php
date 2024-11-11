<?php 
// Start the session 
session_start(); 
// Check if the 'views' session variable exists 
if(isset($_SESSION['views'])) { 
// If it exists, increment the count 
$_SESSION['views'] = $_SESSION['views'] + 1; 
} else { 
// If it doesn't exist, initialize it to 1 
$_SESSION['views'] = 1; 
} 
// Display the current view count 
echo "<h2>Page Views Count: ".$_SESSION['views']."</h2>"; 
?>