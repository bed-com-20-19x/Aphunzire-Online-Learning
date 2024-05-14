<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "aphunzire"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are set
    if (isset($_POST['old_password'], $_POST['new_password'], $_POST['confirm_password'])) {
        // Retrieve posted values
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Example: Check if the old password matches a stored password
        // Fetch the stored password from your database
        $user_id = 1; // Adjust this according to your user identification method
        $sql = "SELECT password FROM users WHERE user_id = $user_id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $stored_password = $row["password"];

            if ($old_password == $stored_password) {
                // Old password matches, proceed to change the password
                if ($new_password == $confirm_password) {
                    // Update the password in the database
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $sql = "UPDATE users SET password = '$hashed_password' WHERE user_id = $user_id";
                    if ($conn->query($sql) === TRUE) {
                        echo "Password changed successfully!";
                        // Redirect to the admin dashboard
                        header("Location: admin_dashboard.php");
                        exit();
                    } else {
                        echo "Error updating password: " . $conn->error;
                    }
                } else {
                    echo "New password and confirm password do not match.";
                }
            } else {
                echo "Incorrect old password.";
            }
        } else {
            echo "User not found.";
        }
    } else {
        echo "Please fill in all the fields.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Password Change</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        div {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Password Change</h2>
        <div>
            <label for="old_password"></label>
            <input type="password" name="old_password" id="old_password" placeholder="Enter old password" required>
        </div>
        <div>
            <label for="new_password"></label>
            <input type="password" name="new_password" id="new_password" placeholder="Enter new password" required>
        </div>
        <div>
            <label for="confirm_password"></label>
            <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm new password" required>
        </div>
        <div>
            <input type="submit" value="Change Password">
        </div>
    </form>
</body>
</html>
