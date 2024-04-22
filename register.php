<?php
require_once ("include/initialize.php");
if (isset($_SESSION['StudentID'])){

    #coding
    redirect('index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>

    <!--Bootstrap core CSS -->
    <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo web_root; ?>fonts-awesome.min.css">
    <style type="text/css">
        #title-header {
            background-color: rgb(0, 67, 200);
            border-bottom: 1px solid #add;
            height: 130px;
            padding: 10px 0px;
            text-align: center;
            color: #fff;
            font-size: 18px;
        }
        </style>
        <section id="title-header">
            <div class="title">
                <img class="logo" src="">Aphunzire

                <p class="subtitle"></p>
            </div>
        </section>
        <div class="container" style="min-height: 500px;">
        <p class="page-header" style="font-size: 30px;">Sign Up</p>
        <?php check_message(); ?>
        <div id="login-dp">
            <form class="form-horizontal span6" action="" method="POST" enctype="multipart/form-data" id="login-nav">

            <div class="form-group">
                <div class="col-md-9">
                    <label class="col-md-4 control-label" for="FNAME">Fisrt Name:</label>

                    <div class="col-md-8">
                        <input class="form-control input-sm" id="FNAME" placeholder="First Name" type="text" value="" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-9">
                    <label class="col-md-4 control-label" for="LNAME">Last Name:</label>

                    <div class="col-md-8">
                        <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="">

                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-9">
                    <label class="col-md-4 control-label" for="PASS">Password</label>

                    <div class="col-md-8">
                        <input class="form-control input-sm" id="PASS" name="PASS" placeholder="Password" type="password" value="">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-9">
                    <label class="col-md-4 control-label" for="idno"></label>

                    <div class="col-md-8">
                        <button type="submit" name="btnRegister" class="btn btn-primary btn-sm">Register</button>
                        <a href="login.php"><i class="fa fa-arrow-left"></i>Back to Login</a>
                    </div>
                </div>
            </div>



        </form>
    </div>
</div>

<?php 
if (isset($_POST['btnRegister'])){
   #code ...
   
   $student = new Student();
   $student->Fname    = $_POST['FNAME'];
   $student->Lname    = $_POST['LNAME'];
   $student->Address    = $_POST['ADDRESS'];
   $student->MobileNo    = $_POST['PHONE'];
   $student->STUDUSERNAME    = $_POST['USERNAME'];
   $student->STUDPASS    = sha1($_POST['PASS']);
   $student->create();

   message("Your now succefully registere. you can login now!", "success");
   redirect("register.php");
}

?>
<footer style="height: 100px; border-top: 1px solide #ddd; padding: 5px; background-color: blue; color:#fff">
        <p align="left">&copy; MOVING FORWARD WITH EDUCATION</p>
</footer>
</section>