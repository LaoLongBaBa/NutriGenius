<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="/Home/login/css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="https://www.jq22.com/jquery/font-awesome.4.7.0.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- web-fonts -->

    <!-- //web-fonts -->
</head>

<body style="background-image: url('/Home/chat/images/bg-2.png');background-size: 100% 100%;">
<!-- bg effect -->

<!-- //bg effect -->
<!-- title -->
<h1>Effect Login Form</h1>

<!-- //title -->
<!-- content -->
<div class="sub-main-w3">

    <form action="/dologin" method="post">
        @csrf
        @if(Session::has('ok'))
            <h2 style="color: green">{{Session::get('ok')}}</h2><br><br>
        @endif
        @if(Session::has('message'))
            <h2 style="color: red">{{Session::get('message')}}!</h2><br><br>
        @endif

        <div class="form-style-agile">
            <label>
                <i class="fa fa-user"></i>
                Username
            </label>
            <input placeholder="Username" name="user_name" type="text" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fa fa-unlock-alt"></i>
                Password
            </label>
            <input placeholder="Password" name="password" type="password" required="">
        </div>
        <!-- checkbox -->
        <div class="wthree-text">
            <ul>
                <li>
                    <label class="anim">
                        <input type="checkbox" class="checkbox" required="">
                        <span>Stay Signed In</span>
                    </label>
                </li>
                <li>
                    <a href="/register">Don't have an account yet?</a>
                </li>
            </ul>
        </div>
        <!-- //checkbox -->
        <input type="submit" value="Log In">
    </form>
</div>
<!-- //content -->

<!-- copyright -->
<div class="footer">
    <p> &copy; 2023.</p>
</div>
<!-- //copyright -->

<!-- Jquery -->
<script src="https://www.jq22.com/jquery/jquery-1.10.2.js"></script>
<!-- //Jquery -->

<!-- effect js -->
<script src="/Home/login/js/canva_moving_effect.js"></script>
<!-- //effect js -->

</body>

</html>
