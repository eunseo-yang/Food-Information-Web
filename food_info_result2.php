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

        <?php 
            $sqlquery = "SELECT se"
        ?>

        <form method='post' action="food_info_insert.php">
            <section class="login-input-section-wrap">
                <h2>You can insert new menu into our db! Try it!</h2> 
            </section>
            <section class="login-input-section-wrap">
                <div class="login-input-wrap">	
                    <input placeholder="Input item you want to update." type="text" id="item" name="item"></input>
                </div>
                <div class="login-input-wrap">	
                    <input placeholder="Input information you want to update." type="text" id="information" name="information"></input>
                </div>
            </section>
            <section class="Easy-sgin-in-wrap">
                <ul class="login-button-wrap">
                    </li><button type='submit'>Update</button>
                </ul>
            </section>
        </form>
        <br>
        <br>
        <br>
        
            <section class="login-input-section-wrap">
                <h2>You can delete this menu in our db! Try it!</h2> 
            </section>
            <section class="Easy-sgin-in-wrap">
                <ul class="login-button-wrap">
                    </li><button type='button' onClick="location.href='food_info_delete.php'">Delete</button>
                </ul>
            </section>
    </div>
</div>

</body>

<?php
    include 'db_info.php';
    


    $menu_name = $_POST['menu_name'];
    $menu_classification = $_POST['menu_classification'];
    $menu_serving_size = $_POST['menu_serving_size'];
    $menu_kcal = $_POST['menu_kcal'];
    $menu_protein = $_POST['menu_protein'];
    $menu_fat = $_POST['menu_fat'];
    $menu_carbohydrate = $_POST['menu_carbohydrate'];
    $menu_sugar = $_POST['menu_sugar'];
    $menu_dietary_fiber = $_POST['menu_dietary_fiber'];
    $menu_calcium = $_POST['menu_calcium'];
    $menu_magnesium = $_POST['menu_magnesium'];
    $menu_potassium = $_POST['menu_potassium'];
    $menu_sodium = $_POST['menu_sodium'];
    $menu_cholesterol = $_POST['menu_cholesterol'];


    $check1 = "BEGIN TRANSACTION";
    $check2 = "INSERT INTO nutrition(name,classification,serving_size,kcal,protein) VALUES('$menu_name','$menu_classification','$menu_serving_size','$menu_kcal','$menu_protein')";
    $check3 = "INSERT INTO nutrition(fat,carbohydrate,sugar,dietary_fiber,calcium,magnesium,potassium,sodium,cholesterol) VALUES('$menu_fat','$menu_carbohydrate','$menu_sugar','$menu_dietary_fiber','$menu_calcium','$menu_magnesium','$menu_potassium','$menu_sodium','$menu_cholesterol')";
    $check4 = "COMMIT";
    
    $result1 = $mysqli->query($check1);
    $result2 = $mysqli->query($check2);
    $result3 = $mysqli->query($check3);
    $result4 = $mysqli->query($check4);

    if($result1&&$result2&&$result3&&$result4){
       echo "음식정보가 입력되었습니다";
       
    }
    else echo "음식정보가 입력될 수 없습니다";
   


?>
