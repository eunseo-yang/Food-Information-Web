<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/51db22a717.js" crossorigin="anonymous"></script>
    <style type = "text/css">
        :root{
            --body-background-color:white;
            --font-color: #4e4e4e;
            --border-gray-color :#d3345b;
            --naver-green-color: #d3345b;
            --naver-green-border-color: #d3345b;
        }
        h1{
            color:rgb(214, 97, 117);
            text-align:center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-style: bold;
            font-size:40px;
        }
        *{
            margin:0;
            padding:0;
        }

        body{
            background:var(--body-background-color);
        }

        .main-container{
            width:100%;
            display:flex;
            flex-direction:column;
            align-items:center;
            margin-top: 21px;
        }
        .main-container .main-wrap{
            width:768px;

        }
        .main-container .main-wrap .sel-lang-wrap .lang-select
        {
            width: 96px;
            height: 30px;
            color: var(--font-color);
            border: solid 1px var(--border-gray-color);
        }
        .main-container .main-wrap .logo-wrap{
            padding-top:55px;
        }
        .main-container .main-wrap .logo-wrap img
        {
            width: 231px;
            height: 44px;
        }

        .main-container .main-wrap header .sel-lang-wrap{
            display:flex;
            justify-content:flex-end;
        }

        .main-container .main-wrap header .logo-wrap{
            display:flex;
            flex-direction: column;
            align-items: center;
        }
        .login-input-section-wrap{
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-input-wrap{
            width: 465px;
            height :fit-content;
            margin:3px;
            padding:5px;
            border: solid 1px var(   --border-gray-color );
            background: white;
            font-size: 15px;
            font-style: solid;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .password-wrap{
            margin-top: 13px;
        }
        .login-input-wrap input{
            border: none;
            width:400px;
            margin-top: 10px;
            font-size: 14px;
            margin-left: 10px;
            height:30px;
        }
        .login-button-wrap {
            padding-top: 13px;
        }
        .login-button-wrap button{
            width: 465px;
            height :48px;
            font-size: 18px;
            background: var(--naver-green-color);
            color: white;
            border: solid 1px var(--naver-green-border-color);
        }
        .Easy-sgin-in-wrap{
            text-align: center;
        }
        .Easy-sgin-in-wrap .sign-button-list
        {
            padding-top:25px;
            list-style: none;
            width: 465px;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .Easy-sgin-in-wrap .sign-button-list li button{
            width: 465px;
            height: 56px;
            border: solid 1px var(--border-gray-color);
            text-align: middle;
            align-items: center;
            background: white;
            align-items: center;
        }
        .Easy-sgin-in-wrap .sign-button-list li button i{
            padding-left: 15px;
            font-size: 20px;
        }
        .Easy-sgin-in-wrap .sign-button-list li button span{
            padding-left: 20px;
            font-size: 18px;
        }
        .Easy-sgin-in-wrap .forget-msg{
            color:var(--font-color);
            font-size: 14px;
            padding-top: 10px;

        }
        .Easy-sgin-in-wrap .sign-button-list li{
            padding-bottom: 10px;
            padding-left: 15px;
            font-size: 20px;
            align-items: center;
            text-align: center;
            border-color: #d3345b;
        }

        h1{
            color:rgb(214, 97, 117);
            text-align:center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            font-style: bold;
            font-size:40px;
        }
        div.button
        {
            margin: auto;
            width: 50%;
        }

        div.button input
        {
            padding: 5px;
            width: 100%;
            font-size: 18px;
        }

        #topMenu{
            height :50px;
            width : 100%;
            align-self: center;
            text-align:center;
            list-style:none;
            color:white;
            background-color: rgb(245, 150, 166);
            float:left;
            line-height:30px;
            display:inline;
            padding:10px;
            vertical-align: middle;
        }


        #topMenu li{
            display:inline;
            padding:auto;
        }
        #topMenu a{
            display:inline;
            padding:100px;
            margin: 20px;
        }

        #topMenu .menuLink{
            text-decoration:none;
            color: white;
            display: inline;
            width: 150px;
            padding:10px;
            font-size: 17px;
            font-weight: bold;
            font-family: "Trebuchet MS", Dotum, Arial;
        }
        #topMenu .menuLink:hover{
            color : white;
            background-color:#d3345b;
        }
        #home{
            text-decoration-color: white;
            color : white;
            background-color: #d3345b;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            float:right;
            width: 80px;
            height :30px;
            border-radius:10px;
            margin:3px;
            font-size: 15px;
            background: var(--naver-green-color);
            border: solid 1px var(--naver-green-border-color);
        }
        p{
            font-size:20px;
            text-align:left;
            font-family:Impact;
        }
    </style>

    </head>
    <body>
    <div class="main-container">
        <div class="main-wrap">
            <header>
                <h1> Health Care Service </h1>
            </header>
            <br>
            <br>
            <button type="button" onclick="location.href='main_page.html'" id="home">Home</button>
            <button type="button" onclick="location.href='Login.html'" id="home">Login</button>
            <button type="button" onclick="location.href='sign_up.php'" id='home'>Sign Up</button>
            <br>
            <br>
            <br>
            <nav id="topMenu">
                <ul>
                    <li><a class="menuLink" href="food_info.html">Food Information</a></li>
                    <li><a class="menuLink" href="food_recipe_list.php">Food Recipe</a></li>
                    <li><a class="menuLink" href="exercise.html">Excercise Calculation</a></li>
                    <li><a class="menuLink" href="needed_cal_nut.html">Check Health</a></li>
                </ul>
            </nav>
            <br>
            <br>
            <br>
        </div>
    </div>
    <br>
    <br>



<?php
  header('Content-Type: text/html; charset=utf-8');
?>

<?php
    $food_name=$_POST['food_name'];
    $food_img2 = $_POST['food_img'];
    $food_way=$_POST['food_way'];
    $food_type=$_POST['food_type'];
    $kcal=$_POST['kcal'];
    $ingredient=$_POST['ingredient'];
    $food_s1=$_POST['food_s1'];
    $food_s1_img=$_POST['food_s1_img'];
    $food_s2=$_POST['food_s2'];
    $food_s2_img=$_POST['food_s2_img'];
    $food_s3=$_POST['food_s3'];
    $food_s3_img=$_POST['food_s3_img'];
    $food_s4=$_POST['food_s4'];
    $food_s4_img=$_POST['food_s4_img'];
    $food_s5=$_POST['food_s5'];
    $food_s5_img=$_POST['food_s5_img'];
    $food_s6=$_POST['food_s6'];
    $food_s6_img=$_POST['food_s6_img'];
    $food_s7=$_POST['food_s7'];
    $food_s7_img=$_POST['food_s7_img'];

 include 'db_info.php';

echo '무슨일이야';

 echo $food_name;
 echo '이미지 url';
 echo $food_img2;


$add_recipe_sql = "INSERT INTO recipe(RCP_NM, RCP_WAY2, RCP_PAT2, INFO_ENG, ATT_FILE_NO_MK, RCP_PARTS_DTLS, MANUAL01, MANUAL_IMG01,  MANUAL02, MANUAL_IMG02, MANUAL03, MANUAL_IMG03, MANUAL04, MANUAL_IMG04, MANUAL05, MANUAL_IMG05, MANUAL06, MANUAL_IMG06, MANUAL07, MANUAL_IMG07 )
VALUES('$food_name', '$food_way', '$food_type','$kcal','$food_img2', '$ingredient', '$food_s1', '$food_s1_img','$food_s2', '$food_s2_img','$food_s3', '$food_s3_img','$food_s4', '$food_s4_img','$food_s5', '$food_s5_img','$food_s6', '$food_s6_img','$food_s7', '$food_s7_img' ) ";
mysqli_query($mysqli, $add_recipe_sql);

mysqli_close($mysqli);

?>

<script>
  alert("새 레시피 작성이 완료되었습니다.");
  location.replace("../main_page.html");
</script>