<?php
//include 'db_info.php';

	session_start();

	if(isset($_SESSION['userid'])){
        $message = "이미 로그인하였습니다. 메인페이지로 돌아가겠습니다";
        header('Location: ./Login.html');
    }
    echo "로그인 성공!";
    echo "<a href=logout.php>로그아웃</a>";
?>