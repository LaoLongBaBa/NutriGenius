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
<main class="bg-grey" style="background-image: url(/Home/chat/images/bg-2.png);height: 1200px">
    <div class="d-flex align-items-center" >
        <div style="width: 1280px;margin: 0 auto;margin-top: 50px">
            <div class="card" >
                <div class="card-body p-5">
                    <div class="sidebar active" id="settings">
                        <div class="text-left mb-2 mt-3"><h2 class="title-text"><b>Your </b> recipe </h2></div>
                        <div class="chat-list-content mb-3 mt-3" tabindex="5" style="overflow: hidden; outline: none;">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" class="collapsed">Appearance <span>Configure your preferences.</span></a></h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" style="">
                                        <div class="panel-body">
                                            <div class="switch-box">
                                                ENERC_KCAL:
                                                <h4>label:{{$totalNutrientsKCal['ENERC_KCAL']['label']}}</h4>
                                                <h4>quantity:{{$totalNutrientsKCal['ENERC_KCAL']['quantity']}}</h4>
                                                <h4>unit:{{$totalNutrientsKCal['ENERC_KCAL']['unit']}}</h4>
                                                PROCNT_KCAL:
                                                <h4>label:{{$totalNutrientsKCal['ENERC_KCAL']['label']}}</h4>
                                                <h4>quantity:{{$totalNutrientsKCal['ENERC_KCAL']['quantity']}}</h4>
                                                <h4>unit:{{$totalNutrientsKCal['ENERC_KCAL']['unit']}}</h4>
                                                FAT_KCAL:
                                                <h4>label:{{$totalNutrientsKCal['ENERC_KCAL']['label']}}</h4>
                                                <h4>quantity:{{$totalNutrientsKCal['ENERC_KCAL']['quantity']}}</h4>
                                                <h4>unit:{{$totalNutrientsKCal['ENERC_KCAL']['unit']}}</h4>
                                                CHOCDF_KCAL:
                                                <h4>label:{{$totalNutrientsKCal['ENERC_KCAL']['label']}}</h4>
                                                <h4>quantity:{{$totalNutrientsKCal['ENERC_KCAL']['quantity']}}</h4>
                                                <h4>unit:{{$totalNutrientsKCal['ENERC_KCAL']['unit']}}</h4>

                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <form>

                        <h3 class="title-text mb-4"><b>Submit Information</b></h3>
                        <p class="mb-4">Enter an ingredient list list for what you are cooking, like "1 cup rice, 10 oz chickpeas", etc.
                            Enter each ingredient on a new line.</p>
                        <div class="form-group text-left">
                            <label for="message" class="col-form-label">Invitation message</label>
                            <textarea class="form-control" style="height: 200px">Age 23, height 185, weight 140, I hope to gain muscle methods</textarea>
                        </div>
                        <p class="mb-4">Enter an ingredient list list for what you are cooking, like "1 cup rice, 10 oz chickpeas", etc.
                            Enter each ingredient on a new line.</p>
                        <div class="form-group text-left">
                            <label for="message" class="col-form-label">Invitation message</label>
                            <textarea class="form-control" name="cookbook" style="height: 200px">1 cup rice , 10 oz chickpeas</textarea>
                        </div>
                        <button class="btn btn-block btn-lg btn-primary mt-2" type="submit" style="background-color: #FF4E01"><b>Create your recipe</b></button>

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
