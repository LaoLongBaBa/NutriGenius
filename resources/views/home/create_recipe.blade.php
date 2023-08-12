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
    .flex-results{
        width: 1280px;margin: 0 auto;margin-top: 50px;background-color: #ffffff;padding: 50px;
    }
</style>
@include('../home.head')

<body>
<main class="bg-grey" style="background-image: url('/Home/chat/images/bg-2.png');padding-bottom: 80px">
    <div class="d-flex align-items-center" >
        <div class="flex-results">
            <div  style="width: 100%;">
                <h3 class="title-text mb-4"><b> Recipe Results</b></h3>
                @if(Session::has('message'))
                    <p style="color: green">{{Session::get('message')}}</p><br>
                @endif
                <h4 class="title-text mb-4"><b>{{$chat_data['user_info']}}：</b></h4>
                <td style="white-space:pre-wrap"><?php echo nl2br($chat_data['chatgpt_result_data'])  ?></td>
                <hr>
{{--                <p><?php echo $chat_data['chatgpt_result_data'] ?></p>--}}
            </div>
            <div class="" style="width: 50%;float: right">
                <br>
                <br>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['MG']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['MG']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['MG']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['K']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['K']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['K']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['FE']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['FE']['quantity']}}  {{$chat_data['api_edamam_data']['totalNutrients']['FE']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['P']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['P']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['P']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['VITA_RAE']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['VITA_RAE']['quantity']}}  {{$chat_data['api_edamam_data']['totalNutrients']['VITA_RAE']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['VITC']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['VITC']['quantity']}}  {{$chat_data['api_edamam_data']['totalNutrients']['VITC']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['NIA']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['NIA']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['NIA']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalDaily']['ENERC_KCAL']['label']}}:  {{$chat_data['api_edamam_data']['totalDaily']['ENERC_KCAL']['quantity']}} {{$chat_data['api_edamam_data']['totalDaily']['ENERC_KCAL']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalDaily']['FAT']['label']}}:  {{$chat_data['api_edamam_data']['totalDaily']['FAT']['quantity']}}  {{$chat_data['api_edamam_data']['totalDaily']['FAT']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalDaily']['FASAT']['label']}}:  {{$chat_data['api_edamam_data']['totalDaily']['FASAT']['quantity']}}   {{$chat_data['api_edamam_data']['totalDaily']['FASAT']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalDaily']['FIBTG']['label']}}:  {{$chat_data['api_edamam_data']['totalDaily']['FIBTG']['quantity']}}   {{$chat_data['api_edamam_data']['totalDaily']['FIBTG']['unit']}} </p>
                <p>       {{$chat_data['api_edamam_data']['totalDaily']['PROCNT']['label']}}:  {{$chat_data['api_edamam_data']['totalDaily']['PROCNT']['quantity']}}   {{$chat_data['api_edamam_data']['totalDaily']['PROCNT']['unit']}} </p>
                <br>
                <br>
                <p style="margin-top: -15px">
                    <a href="/create_week_recipe/{{$chat_data['id']}}">  <button class="btn btn-block btn-lg btn-primary mt-2"  style="background-color: 	#000;border: 0;width: 70%"><b>Obtain a weekly recipe</b></button></a>
                    <a href="/create_recipe_list">  <button class="btn btn-block btn-lg btn-primary mt-2"  style="background-color: 	#000;border: 0;width: 70%"><b>Recipe list</b></button></a>
                </p>
            </div>
            <div style="width: 50%;float: left">
                <h4 class="title-text mb-4"><b> {{$chat_data['api_edamam_data']['ingredients'][0]['text']}}:</b></h4>

                <p>
                    Calories：{{$chat_data['api_edamam_data']['calories']}}
                </p>
                <p>
                    Total CO2 Emissions：{{$chat_data['api_edamam_data']['totalCO2Emissions']}}</p>
                <p>
                    Co2 Emissions Class：{{$chat_data['api_edamam_data']['co2EmissionsClass']}}
                </p>
                <p>
                    TotalWeight：{{$chat_data['api_edamam_data']['totalWeight']}}
                </p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['FAT']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['FAT']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['FAT']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['FIBTG']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['FIBTG']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['FIBTG']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['SUGAR']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['SUGAR']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['SUGAR']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['PROCNT']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['PROCNT']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['PROCNT']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['NA']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['NA']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['NA']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['CA']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['CA']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['CA']['unit']}}</p>
                <p>       {{$chat_data['api_edamam_data']['totalNutrients']['ENERC_KCAL']['label']}}:  {{$chat_data['api_edamam_data']['totalNutrients']['ENERC_KCAL']['quantity']}} {{$chat_data['api_edamam_data']['totalNutrients']['ENERC_KCAL']['unit']}}</p>
                <p>       Date:  {{$chat_data['created_at']}}</p>
                <br>
                <p>
                    <a href="/create_recipe_edit/{{$chat_data['id']}}">  <button class="btn btn-block btn-lg btn-primary mt-2"  style="background-color: #FF4E01;border: 0;width: 70%"><b>Edit</b></button></a>
                    <a href="/create_recipe_del/{{$chat_data['id']}}">  <button class="btn btn-block btn-lg btn-primary mt-2"  style="background-color: #FF4E01;border: 0;width: 70%"><b>Delete</b></button></a>
                </p>
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
