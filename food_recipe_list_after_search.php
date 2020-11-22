<?php include 'menu_bar.html'; ?>
    <form method = 'get' action = '<?=$PHP_SELF?>'>
            <section class="login-input-section-wrap">
    			<div class="login-input-wrap">
    				<input placeholder="Search the menu" type="text" name = "recipe_food_name"></input>
                </div>
            </section>
            <section class="Easy-sgin-in-wrap">
    			<ul class="login-button-wrap">
                    </li><button type='submit' >Result</button>
                </ul>
    		</section>
        </form>
        <br>
        <p style="font-weight: bold; text-align: center; text-size: 20px;"> OR </p>
        <form method = 'post' action = 'add_food_recipe.html'>
        <section class="Easy-sgin-in-wrap">
            			<ul class="login-button-wrap">
                            </li><button type='submit' >add new recipe</button>
                        </ul>
            		</section>

        </form>


   <section class="login-input-section-wrap">

           <?php

         @session_start();

          include 'db_info.php';

          $recipe_food_name = $_GET["recipe_food_name"];
          $get_num_sql = "SELECT COUNT(*) FROM recipe WHERE RCP_NM LIKE '%$recipe_food_name%'";
          $num = mysqli_query($mysqli,$get_num_sql);
          while($row=mysqli_fetch_array($num)){
             $count=$row['COUNT(*)'];
           }

          $list = 100;
          $block = 10;


           $page = ($_GET['page'])?$_GET['page']:1;




          $_SESSION['pageNum'] = ceil($count/$list); // 총 페이지
          $_SESSION['blockNum'] = ceil($_SESSION['pageNum']/$block); // 총 블록
          $nowBlock = ceil($page/$block);


          $s_page = ($nowBlock * $block) - ($block - 1);

          if ($s_page <= 1) {
              $s_page = 1;
          }
          $e_page = $nowBlock*$block;
          if ($_SESSION['pageNum'] <= $e_page) {
              $e_page = $_SESSION['pageNum'];
          }


          for ($p=$s_page; $p<=$e_page; $p++) {
          ?>



          <?php
        }
          ?>




           <?php
           $s_point = ($page-1) * $list;


           $real_data = mysqli_query($mysqli, "SELECT RCP_INDEX, RCP_SEQ, RCP_NM, ATT_FILE_NO_MAIN, RCP_WAY2, INFO_ENG FROM recipe WHERE RCP_NM LIKE '%$recipe_food_name%' LIMIT $s_point, $list");




           for ($i=1; $i<=$count; $i++) {
               $fetch = mysqli_fetch_array($real_data);
           ?>






               <div style ="float: left; display: block; width: 1000px; margin: 0px auto; padding: 10px; text-size: 20px; text-align:center; border: 3px solid rgb(245, 150, 166)">
                   <p style="float: left; margin: 0px auto; text-align: left;"> <?= $fetch['RCP_INDEX'] ?></p>
                   <?php  if(!empty($ATT_FILE_NO_MAIN)) ?> <img style = "float: left; width: 10%; height: 10%;" src = <?=$fetch['ATT_FILE_NO_MAIN'] ?> >
                   <a style= "font-size: 30px; font-weight: bold;" href="food_recipe.php?recipe_food_name=<?=$fetch['RCP_NM']?>"><?= $fetch['RCP_NM'] ?></a>
                                                     <style type="text/css">
                                                      a:link { color: black; text-decoration: none;}
                                                      a:visited { color: black; text-decoration: none;}
                                                      a:hover { color: red; text-decoration: underline;}
                                                     </style>

               </div>


           <?php
               if ($fetch == false) {
                   exit;
               }
           }

?>

<br>
               <br>
               <br>


    </section>




    </div>

</div>

</body>
</html>
<?php
                       mysqli_close($mysqli);
                   ?>