<!doctype HTML>
<head>
</head>
<body>
<?php
	include 'db_info.php';

	session_start();

	$id = $_POST['id'];
	$password = $_POST['pwd'];
	$check = "SELECT * FROM user_table WHERE id = '$id'";
	$result = $mysqli->query($check);

	if(!empty($result)){
		$row = mysqli_fetch_array($result);
		
		if($row['pwd']==$password){
			$_SESSION['id'] = $id;
			if(isset($_SESSION['id'])){
				echo "로그인이 완료되었습니다.";
				echo"<script>location.href='main_page.html'</script>";
			}
			else{
				echo "에러가 발생하였습니다";
				
			}
		}
		else{
			echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다');history.back();</script>";
			
		}
	}
	else{
		echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다');history.back();</script>";
		
	}


?>

</body>
</html>

