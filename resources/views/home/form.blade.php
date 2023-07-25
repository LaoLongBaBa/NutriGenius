<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Create your recipe</title>
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
</style>
@include('../home.head')

<body>
<main class="bg-grey" style="background-image: url('/Home/chat/images/bg-2.png');height: 900px">
    <div class="d-flex align-items-center" >
        <div style="width: 1280px;margin: 0 auto;margin-top: 50px">
            <div class="card" >
                <div class="card-body p-5">
                    <form action="/form_post" method="post">
                        @csrf
                        <h3 class="title-text mb-4"><b>Submit Information</b></h3>
                        <p class="mb-4">First, enter your basic information, target weight, and regular exercise schedule, like "Age 23, height 185, weight 140, I hope to gain muscle methods".</p>
                        <div class="form-group text-left">
                            <label for="message" class="col-form-label">Basic information</label>
                            <textarea class="form-control" style="height: 200px" name="user_info">Age 23, height 185, weight 140, I hope to gain muscle methods</textarea>
                        </div>
                        <p class="mb-4">Enter an ingredient list list for what you are cooking, like "2 bowls of rice, 3 eggs, 500g of beef", etc.
                            Enter each ingredient on a new line.</p>
                        <div class="form-group text-left">
                            <label for="message" class="col-form-label">Enter the list of ingredients you are cooking</label>
                            <textarea class="form-control" name="cookbook" style="height: 200px">2 bowls of rice, 3 eggs, 500g of beef</textarea>
                        </div>
                        <button class="btn btn-block btn-lg btn-primary mt-2" type="submit" style="background-color: #000;border: 0"><b>Create your recipe</b></button>

                    </form>

                </div>
            </div>
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
