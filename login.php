<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt style="background: #3C129EF5;">
                <img src="images/login.png" style="width:100%; object-fit:contain;height: 100%" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="" method="POST">
                    <SPan class="login100-form-title">
                        students Login
                    </SPan>

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="user_email" placeholder="Usernamme">
                        <span class="focus-input100"></span>
                        <span class="symbol-input">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate ="Password is required">
                        <input class="input100" type="password" name="user_pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="btnLogin">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="text2" href="register.php">
                            Create your Acount
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    
</body>
</html>