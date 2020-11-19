<!doctype HTML>
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
        font-style: solid;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

    }
    .password-wrap{
        margin-top: 13px;
    }
    .login-input-wrap input{
        border: 1px;
        width:800px;
        margin-top: 10px;
        font-size: 20px;
        margin-left: 10px;
        height:30px;

        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    
    }
    .login-button-wrap {
        padding-top: 13px;
    }
    .login-button-wrap button{
        width: 1000px;
        height :48px;
        font-size: 18px;
        background: var(--naver-green-color);
        color: white;
        border: solid 1px var(--naver-green-border-color);

    }
    .Easy-sgin-in-wrap{
        text-align: center;
        width:1000px;
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
    p{
        font-size:25px;
        font-style:solid;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    p2{
        font-size:20px;
        font-family: 'Arial Narrow Bold', sans-serif;
    
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
        }

    #div.button input
        {
            padding: 5px;
             width: 100%;
            font-size: 18px;
        }

    </style>
</head>

<body>
<div class="main-container">
<div class="main-wrap">
<div class="main-container">
<div class="main-wrap">
    <br>
    <h1> Health Care Service </h1>
    <br>
    <button type="button" onclick="location.href='main_page.html'" id="home">Home</button>
    <button type="button" onclick="location.href='Login.html'" id="home">Login</button>
    <button type="button" onclick="location.href='register.php'" id='home'>Sign Up</button>
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
    <br>
</div>
</div>

<?php
    include 'db_info.php';
    
    $name = $_POST['name'];
    $sqlquery = "SELECT classification,serving_size,kcal,protein,fat FROM nutrition WHERE name = '$name'";
    $result=mysqli_query($mysqli,$sqlquery);
    
    if(mysqli_num_rows($result)==0){
        $message = " 해당하는 음식 정보를 제공할 수 없습니다..";
    }
    else{
        while($row=mysqli_fetch_assoc($result)){
            $classfication = $row['classification'];
            $serving_size = $row['serving_size'];
            $kcal = $row['kcal'];
            $protein = $row['protein'];
            $fat = $row['fat'];
        }
    }
    
 
?>
<br> <br>
<section class="login-input-section-wrap">
    <h2> <?php echo $name ?>은 <?php echo $classfication ?>류의 음식입니다.</h2>
    <h3> 1회 제공량은 <?php echo $serving_size ?>정도 이며, 1회 제공량당<?php echo $kcal ?>kcal이고, 단백질은 <?php echo $protein ?>, 지방은 <?php echo $fat ?>만큼 함량되어있다.</h3>
</section>

</div>
</div>
</body>
</html>


