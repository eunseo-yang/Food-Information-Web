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

    p.food_recipe_info_box{
            font-size:12px;
        }


    p{
        font-size:17px;
        font-style:solid;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }


    img{
        display: block;
        margin: 0px auto;
        width:60%;
        height:60%;

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
            <li><a class="menuLink" href="food_recipe.html">Food Recipe</a></li>
            <li><a class="menuLink" href="exercise.html">Excercise Calculation</a></li>
            <li><a class="menuLink" href="needed_cal_nut.html">Check Health</a></li>
        </ul>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <section class="login-input-section-wrap">



            <?php

                include 'db_info.php';

                 $recipe_food_name = $_GET["recipe_food_name"];

                 $sqlquery = "SELECT * FROM recipe WHERE RCP_NM = '$recipe_food_name'";
                 $result=mysqli_query($mysqli,$sqlquery);

                if(mysqli_num_rows($result)==0){
                       echo " 등록된 글이 없습니다.";
                 }

                while($row=mysqli_fetch_assoc($result)){
                                $RCP_INDEX=$row["RCP_INDEX"];
                                $RCP_SEQ = $row["RCP_SEQ"];
                                $RCP_NM = $row["RCP_NM"];
                                $RCP_WAY2 = $row["RCP_WAY2"];
                                $RCP_PAT2 = $row["RCP_PAT2"];
                                $INFO_WGT =$row["INFO_WGT"];
                                 $INFO_ENG =$row["INFO_ENG"];
                                 $INFO_CAR =$row["INFO_CAR"];
                                 $INFO_PRO =$row["INFO_PRO"];
                                 $INFO_FAT =$row["INFO_FAT"];
                                 $INFO_NA  =$row["INFO_NA"];
                                 $HASH_TAG =$row["HASH_TAG"];
                                 $ATT_FILE_NO_MAIN =$row["ATT_FILE_NO_MAIN"];
                                 $ATT_FILE_NO_MK =$row["ATT_FILE_NO_MK"];
                                $RCP_PARTS_DTLS =$row["RCP_PARTS_DTLS"];
                                $MANUAL01 =$row["MANUAL01"];
                                $MANUAL_IMG01 =$row["MANUAL_IMG01"];
                                $MANUAL02 = $row["MANUAL02"];
                                $MANUAL_IMG02= $row["MANUAL_IMG02"];
                                $MANUAL03=$row["MANUAL03"];
                                $MANUAL_IMG03 =$row["MANUAL_IMG03"];
                                $MANUAL04=$row["MANUAL04"];
                                 $MANUAL_IMG04=$row["MANUAL_IMG04"];
                                  $MANUAL05 =$row["MANUAL05"];
                                 $MANUAL_IMG05=$row["MANUAL_IMG05"];
                                 $MANUAL06=$row["MANUAL06"];
                                  $MANUAL_IMG06=$row["MANUAL_IMG06"];
                                   $MANUAL07=$row["MANUAL07"];
                                   $MANUAL_IMG07=$row["MANUAL_IMG07"];
                                 $MANUAL08=$row["MANUAL08"];
                                  $MANUAL_IMG08=$row["MANUAL_IMG08"];
                                   $MANUAL09=$row["MANUAL09"];
                                    $MANUAL_IMG09=$row["MANUAL_IMG09"];
                                     $MANUAL10=$row["MANUAL10"];
                                 $MANUAL_IMG10=$row["MANUAL_IMG10"];
                                   $MANUAL11=$row["MANUAL11"];
                                    $MANUAL_IMG11=$row["MANUAL_IMG11"];
                                     $MANUAL12=$row["MANUAL12"];
                                      $MANUAL_IMG12=$row["MANUAL_IMG12"];
                                $MANUAL13=$row["MANUAL13"];
                                 $MANUAL_IMG13=$row["MANUAL_IMG13"];
                                 $MANUAL14=$row["MANUAL14"];
                                 $MANUAL_IMG14=$row["MANUAL_IMG14"];
                                  $MANUAL15=$row["MANUAL15"];
                                 $MANUAL_IMG15=$row["MANUAL_IMG15"];
                                  $MANUAL16=$row["MANUAL16"];
                                  $MANUAL_IMG16=$row["MANUAL_IMG16"];
                            }




?>
                <div class="input-group col-xs-12">
                               <p style="font-size:12px; font-weight: bold; text-align: right;">번호 :<?php echo $RCP_INDEX?></p>
                               <p style="font-weight: bold; font-size: 40px; text-align: center"><?php echo $RCP_NM ?> </p>
                               <br>
                               <br>
                               <p style="font-weight: bold;"> <?php  if(!empty($ATT_FILE_NO_MK)) {echo "<img src = $ATT_FILE_NO_MK>";} ?></p>
                               <br/>
                               <div class="food_recipe_info" style ="display: block; width: 60%; margin: 0px auto; text-align:center; border: 3px solid rgb(245, 150, 166)">
                               <p style="font-size:17px;font-weight: bold;">조리 방법 : <?php echo $RCP_WAY2 ?></p>
                               <p style="font-size:17px;font-weight: bold;">요리 종류 : <?php echo $RCP_PAT2 ?></p>
                               <p style="font-size:17px;font-weight: bold;">1인분 중량 : <?php echo $INFO_WGT ?></p>
                               <p style="font-size:17px;font-weight: bold;">열량 : <?php echo $INFO_ENG ?></p>
                               <p style="font-size:17px;font-weight: bold;">탄수화물 : <?php echo $INFO_CAR ?></p>
                               <p style="font-size:17px;font-weight: bold;">단백질 : <?php echo $INFO_PRO ?></p>
                               <p style="font-size:17px;font-weight: bold;">지방: <?php echo $INFO_FAT ?></p>
                               <p style="font-size:17px;font-weight: bold;">나트륨 : <?php echo $INFO_NA ?></p>
                               <p style="font-size:17px;font-weight: bold;">해쉬태그 : <?php echo $HASH_TAG ?></p>
                               </div>

                               <br><br><br>
                               <div class="food_recipe_ingredient" style ="display: block; width: 60%; margin: 0px auto; text-align:center;">
                               <p style ="font-size:20px;font-weight: bold; text-align: center"> 재료 </p>
                               <br>
                               <p style="font-size:17px; font-weight: bold;"> <?php echo $RCP_PARTS_DTLS ?></p>
                               <br><br><br><br>
                                <p style ="font-size:20px;font-weight: bold; text-align: center"> 조리방법 </p>
                                <br>
                               <?php  if(!empty($MANUAL_IMG01)) {echo "<img src = $MANUAL_IMG01>";}?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL01 ?></p>
                               <br>
                               <?php if(!empty($MANUAL_IMG02)) {echo "<img src = $MANUAL_IMG02>"; }?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL02 ?></p><br>
                               <?php  if(!empty($MANUAL_IMG03)) {echo "<img src = $MANUAL_IMG03>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL03 ?></p><br>
                               <?php  if(!empty($MANUAL_IMG04)) {echo "<img src = $MANUAL_IMG04>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL04 ?></p><br>
                               <?php  if(!empty($MANUAL_IMG05)) {echo "<img src = $MANUAL_IMG05>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL05 ?></p><br>
                               <?php  if(!empty($MANUAL_IMG06)) {echo "<img src = $MANUAL_IMG06>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL06 ?></p><br>
                               <?php  if(!empty($MANUAL_IMG07)) {echo "<img src = $MANUAL_IMG07>"; }?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL07 ?></p><br>
                               <?php if(!empty($MANUAL_IMG08)) { echo "<img src = $MANUAL_IMG08>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL08 ?></p><br>
                               <?php  if(!empty($MANUAL_IMG09)) {echo "<img src = $MANUAL_IMG09>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL09 ?></p><br>
                               <?php if(!empty($MANUAL_IMG10)) { echo "<img src = $MANUAL_IMG10>";} ?>
                               <p style="font-weight: bold;"><?php echo $MANUAL10 ?></p><br>
                               <?php if(!empty($MANUAL_IMG11)) { echo "<img src = $MANUAL_IMG11>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL11 ?></p><br>
                               <?php if(!empty($MANUAL_IMG12)) { echo "<img src = $MANUAL_IMG12>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL12 ?></p><br>
                               <?php if(!empty($MANUAL_IMG13)) { echo "<img src = $MANUAL_IMG13>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL13 ?></p><br>
                               <?php if(!empty($MANUAL_IMG14)) { echo "<img src = $MANUAL_IMG14>";} ?>
                               <p style="font-weight: bold;"><?php echo $MANUAL14 ?></p><br>
                               <?php if(!empty($MANUAL_IMG15)) {echo "<img src = $MANUAL_IMG15>";} ?>
                               <p style="font-weight: bold;"> <?php echo $MANUAL15 ?></p><br>
                               <?php if(!empty($MANUAL_IMG16)) { echo "<img src = $MANUAL_IMG16>";} ?>
                               <p style="font-weight: bold;">  <?php echo $MANUAL16 ?></p><br>


                    </form>
                </div>

<?php
                mysqli_close($mysqli);

            ?>
            <form action = "modify_food_recipe.php" method = "post">
            <section class="Easy-sgin-in-wrap">
                <input  name ="modify_food_name" value='<?php echo $RCP_NM?>' type="hidden"> </>
                <ul class="login-button-wrap">
                    </li><button type="submit" >modify this recipe</button>
                </ul>
            </section>
            </form>
            <br>
            <br>
            <form action = "delete_food_recipe.php" method = "post">
             <section class="Easy-sgin-in-wrap">
                <input name ="delete_food_name" value='<?php echo $RCP_NM?>' type="hidden"> </>
                <ul class="login-button-wrap">
                    </li><button type="submit" >delete this recipe</button>
                </ul>
            </section>
            <br>
             <br>
            </form>


    </section>





