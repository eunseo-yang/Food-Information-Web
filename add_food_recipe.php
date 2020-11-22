<?php include 'menu_bar.html'; ?>
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
    $food_img2_mini = $_POST['food_img'];
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


$add_recipe_sql = "INSERT INTO recipe(RCP_NM, RCP_WAY2, RCP_PAT2, INFO_ENG, ATT_FILE_NO_MK, ATT_FILE_NO_MAIN, RCP_PARTS_DTLS, MANUAL01, MANUAL_IMG01,  MANUAL02, MANUAL_IMG02, MANUAL03, MANUAL_IMG03, MANUAL04, MANUAL_IMG04, MANUAL05, MANUAL_IMG05, MANUAL06, MANUAL_IMG06, MANUAL07, MANUAL_IMG07 )
VALUES('$food_name', '$food_way', '$food_type','$kcal','$food_img2','$food_img2', '$ingredient', '$food_s1', '$food_s1_img','$food_s2', '$food_s2_img','$food_s3', '$food_s3_img','$food_s4', '$food_s4_img','$food_s5', '$food_s5_img','$food_s6', '$food_s6_img','$food_s7', '$food_s7_img' ) ";
mysqli_query($mysqli, $add_recipe_sql);

mysqli_close($mysqli);

?>

<script>
  alert("새 레시피 작성이 완료되었습니다.");
  location.replace("../main_page.html");
</script>