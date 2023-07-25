<!DOCTYPE HTML>
<html lang="zxx">
<head>
    <title>register</title>
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
    <style>
        .form-style-agile input[type="email"],input[type="text"], .form-style-agile input[type="password"] {
            width: 100%;
            color: #000;
            outline: none;
            font-size: 14px;
            letter-spacing: 1px;
            padding: 15px 15px;
            box-sizing: border-box;
            border: none;
            border: 1px solid #000;
            background: #fff;
        }
    </style>
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
@include('../home.head')

<body style="background-image: url('/Home/login/images/login.jpg'); background-size: 100% 1000px;">


<!-- title -->
<h1>Register Form</h1>

<!-- //title -->
<!-- content -->
<div class="sub-main-w3">

    <form action="/register_store" method="post">
        @csrf
        @if(Session::has('ok'))
            <h2>
            </h2><br><br>
{{--            <div class="alert alert-info text-left">{{Session::get('ok')}}</div>--}}
        @endif
        @if(Session::has('message'))
            <h2 style="color: red">{{Session::get('message')}}!</h2><br><br>
{{--            <div class="alert alert-info text-left">{{Session::get('message')}}</div>--}}
        @endif

        <div class="form-style-agile">
            <label>
                <i class="fa fa-user"></i>
                Username
            </label>
            <input placeholder="Username" name="Username" value="{{old('Username')}}"  type="text" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                Email
            </label>
            <input placeholder="Email" value="{{old('email')}}" name="email" type="email" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fa fa-unlock-alt"></i>
                Password
            </label>
            <input placeholder="Password" name="password" type="text" required="">
        </div>
        <div class="form-style-agile">
            <label>
                <i class="fa fa-unlock-alt"></i>
                Confirm Password
            </label>
            <input placeholder="Confirm Password" name="doPassword" type="text" required="">
        </div>
        <!-- checkbox -->
        <div class="wthree-text">
            <ul>
                <li>
{{--                    <a href="/register">Go log in?</a>--}}
                </li>
                <li>
                    <a href="/login">Go log in?</a>
                </li>
            </ul>
        </div>
        <!-- //checkbox -->
        <input type="submit" value="Register">
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
