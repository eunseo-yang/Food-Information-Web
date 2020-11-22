<!doctype HTML>
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
	include 'db_info.php';

	session_start();

	$id = $_POST['id'];
	$password = $_POST['pwd'];
	$check = "SELECT * FROM user WHERE id = '$id'";
	$result =mysqli_query($mysqli, $check);

	if(!empty($result)){
		$row = mysqli_fetch_array($result);
		
		if($row['pwd']==$password){
			$_SESSION['id'] = $id;
			if(isset($_SESSION['id'])){
				echo "<script> alert('로그인이 완료되었습니다.');</script>";
				echo"<script>location.href='main_page.html'</script>";
			}
			else{
				echo "<script> alert('에러가 발생했습니다.');</script>";
				
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

