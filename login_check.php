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
				echo "로그인이 완료되었습니다";
				//header("Location: /index.php");
			}
			else{
				echo "변수저장에 문제가 발생하였습니다";
				//header("location: /login.php");
			}
		}
		else{
			echo "잘못된 아이디나 비밀번호를 입력하였습니다";
			//sheader("location: /login.php");
		}
	}
	else{
		echo "Wrong password or id";
		//header("location: /login.php");
	}


?>

</body>
</html>


