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
                        <input class="form-control input-sm" id="FNAME" placeholder="First Name" type="text" value="required">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-9">
                    <label class="col-md-4 control-label" for="LNAME">Last Name:</label>

                    <div class="col-md-8">
                        <input class="form-control input-sm" id="LNAME" name="LNAME" placeholder="Last Name" type="text" value="required">

                    </div>
                </div>
            </div>

            </form>
        </div>
        </div>
