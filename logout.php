<?php
	include 'db_info.php';

	session_start();

	if(isset($_SESSION['userid'] )){
		unset($_SESSION['userid']);
		session_destroy();
		header("location: index.php");
		exit();
	}
	else{
		echo "에러가 발생하였습니다";
	}
?>



