
<style type="text/css">
    /*去掉ul的样式*/
    ul{
        list-style:none;
    }
    /*去掉a标签的下划线*/
    a{
        text-decoration: none;
    }
    /*设置.nav的宽高、居中显示、下边框样式*/
    .nav{
        width: 1280px;
        height: 70px;
        margin: 0 auto;
        padding-top: 20px;

    }
    /*line-height: 25px;与父元素.nav的height一样，使得li居中显示*/
    .nav li{
        padding:0 15px 0 15px;
        float: left;
        font-size: 20px;
        font-weight: bold;
    }
    /*a标签不能继承父标签的颜色，所以需要单独设置a标签中的字体颜色*/
    .nav li a{
        color: #000;
    }
    /*当鼠标移动到li标签时，背景颜色变成#0266A3*/
    .nav li:hover{
        color: #FF4E01;
    }
    /*当鼠标移动到li标签时，a标签中的字体颜色变成#0266A3*/
    .nav  li:hover  a{
        color: #FF4E01;
    }
    .nav-box{
        width: 100%;
        height: 70px;
        background-color: #ffffff;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030;
        border-bottom: 2px solid #000;
    }
    .logo{
        width: 70px;
        height: 70px;
        margin-top: -20px;
        margin-left: -62px;
    }
</style>
<div class="nav-box">
<div class="nav">
    <!--href="#":阻断a标签跳转刷新页面-->
    <ul>
        <li style="pointer-events: none;"><img src="/home/images/logo.jpg" class="logo" alt=""></li>
        <li><a href="/">Home</a></li>
        <li><a href="/form">Create your recipe</a></li>
        <li><a href="/create_recipe_list">Recipe list</a></li>

        @if(!empty(session('Home_user_name')))
        <li style="margin-left: 580px">{{session('Home_user_name')}}</li>
            <a href="/log_out"><li style="margin-left: 30px">Log out</li></a>
        @else
        <li style="margin-left: 650px"><a href="/login">Log In</a></li>
        @endif
    </ul>
</div>

</div>

<br>
<br>
<br>
