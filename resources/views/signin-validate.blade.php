<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="MHS">

    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <title>Login Page</title>

    <!--google font-->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


    <!--common style-->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
    <link href="assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

    <!--custom css-->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/vendor/html5shiv.js"></script>
    <script src="assets/vendor/respond.min.js"></script>
    <![endif]-->
</head>
<body class="signin-gray-bg signin-body-background">

    <!--===========login start===========-->

    <div class="container">

        <form id="signinForm" method="get" class="form-signin rounded" action="index.html">
            <a href="index.html" class="brand text-center">
                <img src="assets/img/logo-dark.png" srcset="assets/img/logo-dark@2x.png 2x" alt=""/>
            </a>
            <h2 class="form-signin-heading">Please sign in</h2>

            <div class="form-group">
                <input type="text" class="form-control form-control-pill" id="email" name="email" placeholder="Email" />
            </div>

            <div class="form-group">
                <input type="password" class="form-control form-control-pill" id="password" name="password" placeholder="Password" />
            </div>

            <div class="checkbox mb-4 mt-4">
                <div class="form-group form-check float-left">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>

                <a href="forgot-password.html"  class="float-right text-muted">Forgot Password ?</a>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-lg btn-pill btn-block btn-primary" name="signup" value="Sign up">Sign In</button>
            </div>
            <div class="mt-4">
                <span>
                    Don't have an account yet ?
                </span>
                <a href="signup-validate.html" class="text-primary">Sign Up</a>
            </div>
        </form>


    </div>
    <!--===========login end===========-->


    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
    <script src="assets/vendor/jquery.scrollTo.min.js"></script>

    <!--jquery validate-->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="assets/vendor/signin-form-init.js"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->


</body>
</html>


