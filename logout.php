<?php 
require_once 'include/initialize.php';
//four steps to closing a session


//1. find the session
@session_start();

//.2 unset all the session variables
unset($_SESSION ['studentID'] );
unset($_SESSION ['Fname'] );
unset($_SESSION ['Lname'] );
unset($_SESSION ['STUDUSERNAME'] );
unset($_SESSION ['STUDPASS'] );

//3. destroy the session
//session destryed

redirect("index.php?logout=1");
?> 
