<?php session_start(); ?>
<!doctype HTML>
<head>
    <meta charset="UTF-8">
	<title>Team13</title>
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
     <?php
                if(isset($_SESSION['id'])){?>
            <button type="button" onclick="location.href='logout.php'" id="home">Logout</button>
            <?php
                }
                else{
                ?>
            <button type="button" onclick="location.href='Login.html'" id="home">Login</button>
            <button type="button" onclick="location.href='register.php'" id='home'>Sign Up</button>
            <?
                }
            ?>
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
    
    $add_name = $_POST['add_name'];
    $add_met = (float)$_POST['add_met'];

    $sql = "SELECT * FROM moderate_intensity WHERE moderate_name='$add_name'";
    $result = mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);
 
    if($count == 0){
        if ($add_met>=0.0 && $add_met<=2.0){
            $sqlquery = "INSERT INTO light_intensity (`light_index`, `light_name`, `met`) VALUES ('0','$add_name','$add_met')";
            $flag = $add_name;
            echo "<script>alert('낮은 난이도 항목에 {$flag}이/가 추가되었습니다.');</script>";
            $result = mysqli_query($mysqli, $sqlquery);
            if($result === false){
                    echo mysqli_error($conn);
            }
            
        }
        if ($add_met>=3.0 && $add_met<=5.0){
            $sqlquery = "INSERT INTO moderate_intensity (`moderate_index`, `moderate_name`, `met`) VALUES ('0','$add_name','$add_met')";
            $flag = $add_name;
            echo "<script>alert('중간 난이도 항목에 {$flag}이/가 추가되었습니다.');</script>";
            $result = mysqli_query($mysqli, $sqlquery);
            if($result === false){
                    echo mysqli_error($conn);
            }
        }        
        if ($add_met>=5.0 && $add_met<=20.0){
            $sqlquery = "INSERT INTO vigorous_intensity (`vigorous_index`, `vigorous_name`, `met`) VALUES ('0','$add_name','$add_met')";
            $flag = $add_name;
            echo "<script>alert('높은 난이도 항목에 {$flag}이/가 추가되었습니다.');</script>";
            $result = mysqli_query($mysqli, $sqlquery);
            if($result === false){
                    echo mysqli_error($conn);
            }
        }
        
        echo "<script>location.href='http://localhost/exercise.html'</script>";
    }
    else{
        $flag = $add_name;
        echo "<script>alert('{$flag}는 이미 제공되는 운동 정보입니다..');</script>";
        echo "<script>location.href='http://localhost/exercise.html'</script>";
    }
    
 
?>


</div>
</div>
</body>
</html>


