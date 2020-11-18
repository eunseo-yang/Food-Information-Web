<!doctype HTML>
<head>
</head>
<body>
<?php
	include 'db_info.php';

	session_start();

	$id = $_POST['id'];
	$password = $_POST['pwd'];
	$check = "SELECT * FROM user WHERE u_id = '$id'";
	$result = $mysqli->query($check);

	if(!empty($result) && $result->num_rows == 1){
		$row = $result->fetch_array(3); #1 is MYSQLI_NUM 2 is equivalent to MYSQLI_ASSOC 3 is MYSQLI_BOTH
		if($row['password']==$password){
			$_SESSION['userid'] = $id;
			if(isset($_SESSION['userid'])){
				echo "회원가입이 완료되었습니다";
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


