
 <?php
   header('Content-Type: text/html; charset=utf-8');
 ?>
 <?php

 include 'db_info.php';

 $food_name=$_POST['delete_food_name'];

 $delete_recipe_sql = "DELETE FROM recipe WHERE RCP_NM = '$food_name'";

 $result = mysqli_query($mysqli, $delete_recipe_sql);

 mysqli_close($mysqli);

 ?>

 <script>
   alert("레시피 삭제 완료되었습니다.");
   location.replace("../main_page.html");
 </script>

 ?>