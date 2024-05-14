<?php
// database connection
include('dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

// comparing where the user name and the password in the database
$query = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password'")or die(mysqli_error());
$count = mysqli_num_rows($query);
$row = mysqli_fetch_array($query);

if ($count > 0){
    $_SESSION['id'] = $row['user_id'];
    
    // Check if the password is a default or temporary password
    $default_password = "change_me"; // Define your default or temporary password here
    if ($password == $default_password) {
        // Flag indicating that the password needs to be changed
        $_SESSION['change_password'] = true;
    }
    
    echo 'true';
    
    mysqli_query($conn,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysqli_error());
} else { 
    echo 'false';
}   
?>
