<?php
    session_start();
    ini_set('display_errors', '0');
    if($_SESSION['rank'] != 10){
        echo "
        <script>
            alert('관리자 전용기능입니다.');
            history.back();
        </script>";
    }
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $sql = "select * from bundle";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>업로드</title>
    <link rel="stylesheet" href="./css/upload.css">
</head>
<body>
    <div id="upload__all">
        <form id="upload__body" action="./php/upload.php" method="post" enctype="multipart/form-data">
        <a href="./index.php"><img src="./image/logo_w.png" class="logo__img" alt="로고"></a>
            <div id="exit">
                <div class="xbar1"></div>
                <div class="xbar2"></div>
            </div>
            <p>영상 업로드 <label for="input-file"><img src="./image/워황.png" alt=""></label><input type="file" name="userfile" id="input-file"></p>
            <p>영상 이름 : <input type="text" name="name"></p>
            <p>작가 : <input type="text" name="author"></p>
            <p>강사 : <input type="text" name="teacher"></p>
            <p>소개 : <input type="text" name="introduce"></p>
            <p>카테고리 : <input type="text" name="category"></p>
            <p>영상 등급 : <input type="text" name="vr_rank"></p>
            <input type="submit" value="업로드">
        </form>
            <div class="v_div">
                <div class="video">
        <?php
            while($row = mysqli_fetch_array($result)){
        ?>
                    
                        <video src="<?=$row['v_url'].$row['video_name']?>.mp4" controls></video>
                    
        <?php
            }
        ?>
                </div>
            </div>
    </div>
</body>
</html>