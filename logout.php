<?php
	include 'db_info.php';

	session_start();

	if(isset($_SESSION['userid'] )){
		unset($_SESSION['userid']);
		session_destroy();
		echo"<script>alert('로그아웃 되었습니다');location.href= 'main_page.html';</script>";




		exit();
	}
	else{
		echo "에러가 발생하였습니다";
	}
?>



