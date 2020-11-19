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
            <li><a class="menuLink" href="food_recipe_list.php">Food Recipe</a></li>
            <li><a class="menuLink" href="exercise.html">Excercise Calculation</a></li>
            <li><a class="menuLink" href="needed_cal_nut.html">Check Health</a></li>
        </ul>
        </nav>

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
   include "db_info.php";

   $id = $_POST['id'];
   $pwd = $_POST['pwd'];
   $name = $_POST['name'];
   $height = $_POST['height'];
   $weight = $_POST['weight'];
   $gender = $_POST['gender'];

    if($result1&&$result2&&$result3&&$result4){
       echo "음식정보가 입력되었습니다";
       
    }
    else {
        echo "<script>alert('모든 정보가 다 입력되지 않았습니다. 다시 모두 입력해주세요.');</script>";
        echo "<script>location.href='http://localhost/food_info.html'</script>";    
    }

    if($id == NULL || $pwd == NULL || $name == NULL || $height == NULL || $weight == NULL || $gender == NULL){
        echo "정보가 빠져있습니다. 모든 정보를 채워주세요";
        echo "<a href= /register.php>페이지 돌아가기</a>";
        exit();
     }
     else{
        echo "완료되었습니다"."<br>";
     }
  
     $check ="SELECT * FROM user where u_id = '$id'";
     $result = $mysqli->query($check);
     if($result->num_rows == 1){
        echo "이미 있는 아이디입니다";
        echo "<a href=/register.php>페이지 돌아가기</a>";
        exit();
     }
     else{
  
     }
     $query = "INSERT INTO user (id,pwd,height,weight,gender,name) VALUES('$id','$pwd','$height','$weight','$gender','$name')";
     $execute = $mysqli->query($query);
     if($execute){
        echo "회원가입이 성공적으로 완료되었습니다 ";
        echo "<script>location.href='http://localhost/main_page.html'</script>";    
     }
     else{
        echo "에러가 발생하였습니다"."<br>";
        echo $mysqli->error;
     }
  ?>

        <form method="post" action="sign_update">
            <section class="login-input-section-wrap">
                <div class="login-input-wrap">	
                    <input placeholder="변경하고 싶은 ID를 입력하세요." type="text" id="modify_id" name="modify_id"></input>
                </div>
                <div class="login-input-wrap">	
                <input placeholder="변경하고 싶은 PWD를 입력하세요." type="text" id="modify_pwd" name="modify_pwd"></input></div>
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
        <form method="post" action="sign_update">
            <section class="login-input-section-wrap">
                <div class="login-input-wrap">	
                    <input placeholder="삭제하고 싶은 ID를 입력하세요." type="text" id="delete_id" name="delete_id"></input>
                </div>
                <div class="login-input-wrap">	
                <input placeholder="PWD를 입력하세요." type="text" id="delete_pwd" name="delete_pwd"></input></div>
            </section>
            <section class="Easy-sgin-in-wrap">
                <ul class="login-button-wrap">
                    </li><button type='submit'>Delete</button>
                </ul>
            </section>
        </form> 

?>
