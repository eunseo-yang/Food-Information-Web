<?php
   include "db_info.php";

   $id = $_POST['id'];
   $pwd = $_POST['pwd'];
   $name = $_POST['name'];
   $height = $_POST['height'];
   $weight = $_POST['weight'];
   $gender = $_POST['gender'];

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
      echo "Okay";
   }
   $query = "INSERT INTO user (id,pwd,height,weight,gender,name) VALUES('$id','$pwd','$height','$weight','$gender','$name')";
   $execute = $mysqli->query($query);
   if($execute){
      echo "회원가입이 성공적으로 완료되었습니다 ";
      //header("location: /login.php");
   }
   else{
      echo "에러가 발생하였습니다"."<br>";
      echo $mysqli->error;
   }
?>