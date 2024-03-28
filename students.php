<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="students.css">
    <title>STUDENTS</title>
</head>
<body>
    <div class="formm">
    <?php
        if(isset($_POST['user_type']) && $_POST['user_type'] == "student") {
            echo '<form action="process.php" method="post">';
            echo '<input type="text" name="username" placeholder="username">';
            echo '<input type="password" name="pass" placeholder="password">';
            echo '<button type="submit" name="submit">submit</button>';
            echo '</form>';
        } else {
            // Redirect to index page if accessed without selecting student
            header("Location: index.html");
            exit();
        }
    ?>
    </div>
</body>
</html>
