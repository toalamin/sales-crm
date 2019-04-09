<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Login | Amar Bebsha</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="page-body login-page">

<div class="login-container">

    <div class="login-header login-caret">

        <div class="login-content" style="width:100%;">
            <h2 style="color:#cacaca; font-weight:100;"> Amar Bebsha </h2>
        </div>

    </div>

    <div class="login-form">
        <div class="login-content">

            <div class="form-login-error">
                <h3>Invalid login</h3>
                <p>Please enter correct email and password!</p>
            </div>

            <form method="post" role="form" id="form_login">

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>

                        <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                               autocomplete="off" data-mask="email"/>
                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>

                        <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                               autocomplete="off"/>
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        Login
                    </button>
                </div>

            </form>

        </div>

    </div>

</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
