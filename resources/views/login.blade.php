<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.codedthemes.com/datta-able/bootstrap/default/auth-signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jun 2020 13:10:31 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <title>Sales Funnel - Signin</title>


    <!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes"/>

    <link rel="icon" href="http://html.codedthemes.com/datta-able/bootstrap/assets/images/favicon.ico"
          type="image/x-icon">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">

    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="auth-bg">
            <span class="r"></span>
            <span class="r s"></span>
            <span class="r s"></span>
            <span class="r"></span>
        </div>
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-4">
                    <i class="feather icon-unlock auth-icon"></i>
                </div>
                <form action="login" method="POST">

                    <h3 class="mb-4">Login</h3>
                    <div class="input-group mb-3">
                        @csrf
                        <input type="email" name="email" class="form-control" placeholder="Email" >
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">

                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-6" type="submit" onclick="window.location.href='/dashboard';">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/vendor-all.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/pcoded.min.js"></script>
</body>

</html>
