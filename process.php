<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];
    // Process the form data as needed
    echo "Username: $username<br>";
    echo "Password: $password<br>";
}
?>
