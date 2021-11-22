<?php
    session_start();
    ini_set('display_errors', '0');
    if($_SESSION['code'] == $_POST['code']){
        session_destroy();
    }else{
        echo "<script>
            alert('인증코드가 틀립니다.');
            history.back();
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="./css/resister.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="./js/login.js"></script>
</head>
<body>
    <div id="j_m">
        <section class="join_member">
            <img class="jm_logo" src="./image/logo_w.png">
            <div id="jcon">
                <div class="join_text">회원가입</div>
                <form method="post" action="./php/signup.php">
                    <div class="u_infor"><div class="j_text"></div><input class="j_id" type="email" name="j_id" placeholder="이메일 주소"></div><br>
                    <div class="u_infor"><div class="j_text"></div><input class="j_pass" type="password" name="j_password" placeholder="비밀번호"></div><br>
                    <div class="u_infor"><div class="j_text"></div><input class="j_pass_ck" type="password" name="j_pass_ck" placeholder="비밀번호 확인"></div><br>
                    <div class="u_infor"><div class="j_text"></div><input class="j_name" type="text" name="j_name"placeholder="이름"></div><br>
                    <div class="u_infor"><div class="j_text"></div><input class="j_phone" type="text" name="j_phone" placeholder="휴대폰번호(번호만입력)"></div><br>
                    <input type="submit" value="회원가입" id="user_button"><br>
                </form>
                <a href="./web/login.php"><button id="exit_btn">이미 회원이신가요?&nbsp;<p>로그인하기</p></button></a>
            </div>
        </section>
    </div>
</body>
</html>