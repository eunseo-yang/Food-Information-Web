<!DOCTYPE html>
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
        width:1000px;
    
    }
    .main-container .main-wrap .sel-lang-wrap .lang-select
    {
        width: 1000px;
        height: 30px;
        color: var(--font-color);
        border: solid 1px var(--border-gray-color);
    }
    
    .main-container .main-wrap header .sel-lang-wrap{
        display:flex;
        justify-content:flex-end;
    }
    .password-wrap{
        margin-top: 13px;
    }

    .login-input-section-wrap{
        padding-top: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    
    .login-input-wrap{
        width: 1000px;
        height :fit-content;
        margin:3px;
        padding:5px;
        border: solid 1px var(	--border-gray-color );
        background: white;
        font-size: 15px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    .login-input-wrap input{
        border: none;
        width:800px;
        margin-top: 10px;
        font-size: 20px;
        margin-left: 10px;
        height:50px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        border-radius: 10px;
    }
    .login-button-wrap {
        padding-top: 13px;
    }
    .Insert-button-wrap button{
        width: 1000px;
        height :50px;
        font-size: 18px;
        background: var(--naver-green-color);
        color: white;
        border: solid 1px var(--naver-green-border-color);

    }
    .login-button-wrap button{
        width: 1000px;
        height :70px;
        font-size: 20px;
        background: var(--naver-green-color);
        color: white;
        border: solid 1px var(--naver-green-border-color);

    }
    .Easy-sgin-in-wrap{
        text-align: center;
        width:800px;
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
        padding-left: 10px;
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
            padding: 0px;
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
        #login_button{
            text-align:center;
            padding:7px 0;
            text-decoration: none;
            display:inline-block;
            font-size: 15px;
            margin:2px;
            cursor:pointer;
            background-color:rgb(212, 150, 88);
            border-color: white;
            color:white;
            border-radius:10px;
            float: right; 
            }

    #div.button
        {
            margin: auto;
            width: 50%;
            height : 50px;
        }

    #div.button input
        {
            padding: 5px;
            width: 100%;
            height:50px;
            font-size: 18px;
        }
        .login-input-section-wrap{
        padding-top: 60px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }


    </style>
</head>

<body>
<div class="main-container">
	<div class="main-wrap">
        <br>
        <h1> Health Care Service </h1>

            <button type="button" onclick="location.href='main_page.html'" id="home">Home</button>
            <button type="button" onclick="location.href='Login.html'" id="home">Login</button>
            <button type="button" onclick="location.href='register.php'" id='home'>Sign Up</button>
        <br>
        <br>
        <br>
        <nav id="topMenu">
        <ul>
            <li><a class="menuLink" href="food_info.html">Food Information</a></li>
            <li><a class="menuLink" href="food_recipe.html">Food Recipe</a></li>
            <li><a class="menuLink" href="exercise.html">Excercise Calculation</a></li>
            <li><a class="menuLink" href="needed_cal_nut.html">Check Health</a></li>
        </ul>
        </nav>
        
    </div>
</div>

</body>

<?php
    include 'db_info.php';
    session_start();


    $information = $_POST['information'];
    $item = $_POST['item'];
	

    $check2 = "UPDATE nutrition set [$item]=$information WHERE name in (SELECT name from user where id= $_SESSION['id']";
	$result2 = $mysqli->query($check2);

    if($result2!=null){
        $row = $result2->fetch_array(3);
        $a=$row['menu'];
        echo $a;

       
    }
    else echo "입력하신 음식을 찾을 수 없습니다";

    $id = "SELECT id from nutrition where name='$name'"; 
    $check3 = "DELETE FROM nutrition  WHERE num='$id'";
	$result3 = $mysqli->query($check3);


?>