<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Aphunzire online learning</title>
    <style>
        /* Add your CSS styles here or link to an external stylesheet */
        .container {
            text-align: center; /* Center align the content */
        }
        .log {
            margin-top: 20px; /* Add margin for spacing */
        }
        .img {
            max-width: 100%; /* Ensure the image doesn't overflow its container */
        }
        .topic {
            margin-top: 20px; /* Add margin for spacing */
        }
        .form {
            margin-top: 20px; /* Add margin for spacing */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="log">
            <img class="img" src="images/login.png" alt="login">
        </div>
        <div class="topic">
            <h1>APHUNZIRE ONLINE LEARNING</h1>
            <h2>MOVING FORWARD WITH EDUCATION</h2>
        </div>
        <div class="form">
            <form action="students.php" method="post"> <!-- Form to submit to students.php -->
                <button class="btn1" type="submit" name="user_type" value="student">Students</button>
            </form>
            <form action="teacher.php" method="post"> <!-- Form to submit to teacher.php -->
                <button class="btn2" type="submit" name="user_type" value="teacher">Teacher</button>
            </form>
        </div>
    </div>
</body>
</html>
