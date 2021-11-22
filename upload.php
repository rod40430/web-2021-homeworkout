<?php
    session_start();
    if($_SESSION['rank'] != 10){
        echo "
        <script>
            alert('관리자 전용기능입니다.');
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
    <title>업로드</title>
</head>
<body>
<form action="./php/upload.php" method="post" enctype="multipart/form-data">
    <p>영상 업로드 : <input type="file" name="userfile" id="upload"></p>
    <p>영상 이름 : <input type="text" name="name"></p>
    <p>작가 : <input type="text" name="author"></p>
    <p>강사 : <input type="text" name="teacher"></p>
    <p>소개 : <input type="text" name="introduce"></p>
    <p>카테고리 : <input type="text" name="category"></p>
    <p>영상 등급 : <input type="text" name="vr_rank"></p>
    <input type="submit" value="업로드">
</form>

</body>
</html>