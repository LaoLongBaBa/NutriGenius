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
</style>
@include('../home.head')

<body>
<main class="bg-grey" style="background-image: url('/Home/chat/images/bg-2.png');height: 1500px">
    <div class="d-flex align-items-center" >
            <div style="width: 1280px;margin: 0 auto;background-color: #ffffff;padding: 50px">
                <form action="/create_recipe_edit_processing/{{$chat_data['id']}}" method="post" class="mb-3 mt-3">
                <div  style="width: 48%;float: right;margin-top: 10px">
                    <br>
                    <br>
                    @csrf
                    {{$chat_data['api_edamam_data']['totalNutrients']['NA']['label']}}:<input type="text" name="NA" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['NA']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['CA']['label']}}:<input type="text" name="CA" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['CA']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['MG']['label']}}:<input type="text" name="MG" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['MG']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['K']['label']}}:<input type="text" name="K" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['K']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['FE']['label']}}:<input type="text" name="FE" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['FE']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['P']['label']}}:<input type="text" name="P" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['P']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['VITA_RAE']['label']}}:<input type="text" name="VITA_RAE" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['VITA_RAE']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['VITC']['label']}}:<input type="text" name="VITC" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['VITC']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['NIA']['label']}}:<input type="text" name="NIA" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['NIA']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['WATER']['label']}}:<input type="text" name="WATER" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['WATER']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalDaily']['ENERC_KCAL']['label']}}:<input type="text" name="totalDaily_ENERC_KCAL" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalDaily']['ENERC_KCAL']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalDaily']['CHOCDF']['label']}}:<input type="text" name="CHOCDF" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalDaily']['CHOCDF']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalDaily']['FIBTG']['label']}}:<input type="text" name="totalDaily_FIBTG" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalDaily']['FIBTG']['quantity']}}">

                </div>
                <div  style="width: 48%;float: left">
                    <h3 class="title-text mb-4"><b> Recipe Results Edit</b></h3>
                    calories:<input type="text" name="calories" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['calories']}}">
                    Co2 Emissions Class:<input type="text" name="co2EmissionsClass" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['co2EmissionsClass']}}">
                    total Weight:<input type="text" name="totalWeight" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalWeight']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['ENERC_KCAL']['label']}}:<input type="text"  name="ENERC_KCAL" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['ENERC_KCAL']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['FAT']['label']}}:<input type="text" name="FAT" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['FAT']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['FATRN']['label']}}:<input type="text" name="FATRN" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['FATRN']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['CHOCDF']['label']}}:<input type="text" name="CHOCDF" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['CHOCDF']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['CHOCDF.net']['label']}}:<input type="text" name="CHOCDF_net" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['CHOCDF.net']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['FIBTG']['label']}}:<input type="text" name="FIBTG" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['FIBTG']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['SUGAR']['label']}}:<input type="text" name="SUGAR" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['SUGAR']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalNutrients']['PROCNT']['label']}}:<input type="text" name="PROCNT" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalNutrients']['PROCNT']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalDaily']['FAT']['label']}}:<input type="text" name="totalDaily_FAT" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalDaily']['FAT']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalDaily']['FASAT']['label']}}:<input type="text" name="FASAT" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalDaily']['FASAT']['quantity']}}">
                    {{$chat_data['api_edamam_data']['totalDaily']['PROCNT']['label']}}:<input type="text" name="totalDaily_PROCNT" class="form-control mb-3"  value="{{$chat_data['api_edamam_data']['totalDaily']['PROCNT']['quantity']}}">
                </div>
                    <button class="btn btn-block btn-lg btn-primary mt-2" type="submit" style="background-color: #FF4E01;border: 0"><b>Submit</b></button>
                </form>
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
