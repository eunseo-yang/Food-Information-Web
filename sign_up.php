<?php
   include "db_info.php";

   $id = $_POST['id'];
   $pwd = $_POST['pwd'];
   $name = $_POST['name'];
   $height = $_POST['height'];
   $weight = $_POST['weight'];
   $gender = $_POST['gender'];
//    $item = $_POST['item'];
//    $information = $_POST['information'];

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
      echo "<script>alert 회원가입이 성공적으로 완료되었습니다. '</script>";  
      echo "<script>location.href='http://localhost/main_page.html'</script>";    
   }
   else{
      echo "에러가 발생하였습니다"."<br>";
      echo $mysqli->error;
   }
?>


<form method='post' action="food_info_result.php">
            <section class="login-input-section-wrap">
                <h2>You can update your information. Try it!</h2> 
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
        <form method='post' action="food_info_result.php">
            <section class="login-input-section-wrap">
                <h2>You can delete your account.</h2> 
            </section>
            <section class="Easy-sgin-in-wrap">
                <ul class="login-button-wrap">
                    </li><button type='submit' id="delete" name="delete">Delete</button>
                </ul>
            </section>
        </form>