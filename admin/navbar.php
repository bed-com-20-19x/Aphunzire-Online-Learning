<div class="navbar navbar-fixed-top navbar-inverse" style="background-color:lightgray;">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <span class="brand" href="#">Aphunzire ADMIN Panel</span>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
						<?php $query= mysqli_query($conn,"select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>
                            <li class="dropdown">
    <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
        <i class="icon-user icon-large"></i>
        <?php 
            // Ensure $row is defined and not empty before accessing its elements
            if(isset($row['firstname']) && isset($row['lastname'])) {
                // Escape output to prevent XSS attacks
                $firstname = htmlspecialchars($row['firstname']);
                $lastname = htmlspecialchars($row['lastname']);
                echo $firstname." ".$lastname;  
            } else {
                echo ""; // Provide a default value if $row is not set or empty
            }
        ?>
        <i class="caret"></i>
    </a>
    <ul class="dropdown-menu">
        <li>
            <a href="change_password_teacher.php"><i class="icon-circle"></i> Change Password</a>
            <a tabindex="-1" href="#myModal" data-toggle="modal"><i class="icon-picture"></i> Change Avatar</a>
            <a tabindex="-1" href="profile_teacher.php"><i class="icon-user"></i> Profile</a>
        </li>
        <li class="divider"></li>
        <li><a tabindex="-1" href="logout.php"><i class="icon-signout"></i>&nbsp;Logout</a></li>
    </ul>
</li>

                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>