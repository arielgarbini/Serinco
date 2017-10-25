<?php
session_start();
include("globales.php");

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 

header('Location: '.base_url);

?>

