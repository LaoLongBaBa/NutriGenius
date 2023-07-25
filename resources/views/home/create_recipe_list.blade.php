<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Recipe Results</title>
    <meta name="description" content="Cabe - Responsive Multi-purpose HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- STYLESHEETS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/Home/chat/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/Home/chat/css/owl.theme.default.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="/Home/chat/css/themify-icons.css">
    <link rel="stylesheet" href="/Home/chat/css/main.min.css" type="text/css" media="all">
</head>
<style>
    body {
        overflow: visible;
    }
   .list a{
       color: #000;
   }
   .list a:hover{
       color: #FF4E01;
   }
   .list li{
       margin-bottom: 15px;
   }
   .list{
       color: #000;
       font-size: 20px;
   }
</style>
@include('../home.head')
<body>
<main class="bg-grey" style="background-image: url('/Home/chat/images/bg-2.png');padding-bottom: 80px">
    <div class="d-flex align-items-center" >
        <div style="width: 1280px;margin: 0 auto;margin-top: 50px;background-color: #ffffff;padding: 40px">
            @if(Session::has('message'))
                <p style="color: green">{{Session::get('message')}}</p><br><br>
            @endif
            <ul class="list">
                @foreach($chat_data as $key=>$value)
                    <a href="/create_recipe_info/{{$value->id}}"><li>({{$key+1}}) <span>{{$value->cookbook}}</span><span style="float: right">{{$value->created_at}}</span></li></a>
                @endforeach
            </ul>
        </div>
    </div>

</main>
@include('../home.footer')


<!-- SCRIPTS -->
<script src="https://www.jq22.com/jquery/jquery-3.3.1.js"></script>
<script src="/Home/chat/js/plugin.js"></script>
<script src="/Home/chat/js/main.min.js"></script>



</body>

</html>
