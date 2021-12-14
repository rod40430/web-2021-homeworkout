<?php
session_start();
ini_set('display_errors', '0');
if(isset($_SESSION['id'])){
    // echo "
    // <script>
    // alert('{$_SESSION['name']}님 환영합니다.');
    // </script>
    // ";
}
else{
    echo '
    <script>
    alert("로그인을 해주세요.");
    location.href = "/web/login.php";
    </script>
    ';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="https://img.icons8.com/dusk/64/000000/weightlifting.png">
    <title>홈 - 홈트하우스</title>
    <link rel="stylesheet" href="./css/index.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/index.js"></script>
</head>
<body>
    <!-- header ---------------------------------------------------------------------------------------------------------------------------------------- -->
    <header>

        <!-- 좌측 -->
        <div class="left__bar">
        
            <!-- 로고 -->
            <a href="./index.php"><img class="logo" src="image/logo_f.png"></a>

            <!-- 네비 바 -->
            <ul class="nav">
                <li onclick="Move('top')">HOME</li>
                <li onclick="Move('recommend')">오늘의 추천 홈트</li>
                <li onclick="Move('rank')">인기 홈트</li>
                <li onclick="soon()">내가 찜한 콘텐츠</li>
            </ul>
        </div>


        <!-- 우측 -->
        <div class="right__bar">

            <!-- 검색 -->
            <input type="text" name= "" class="search__bar">
                <img src="./image/search.png" alt="" class="search__icon" onclick="ShowBar()">

                <?php
                    if($_SESSION['rank'] == 10){
                ?>
                <a href="./upload.php">Video Upload</a>
                <?php
                    }
                ?>

            <!-- 프로필 -->
            <div class="user">
                <div id="profile__icon">
                    <img src="https://item.kakaocdn.net/do/8bdb8dec2d96f5e334479d9e139a892cf43ad912ad8dd55b04db6a64cddaf76d" alt="프로필">
                </div>
                <div class="small__layout">
                    <div id="upArrow"></div>
                    <div id="profile">
                        <div id="profile__img">
                            <img src="https://item.kakaocdn.net/do/8bdb8dec2d96f5e334479d9e139a892cf43ad912ad8dd55b04db6a64cddaf76d" alt="프로필">
                        </div>
                        <h3 id="user__name">user</h3>
                    </div>
                    <ul id="acc__menu">
                        <li><a href="./mypage.php">계정</a></li>
                        <li><a href="#">고객센터</a></li>
                        <li><a href="#" onclick="logout();">로그아웃</a></li>
                    </ul>
                </div>
            </div>

            <!-- 버거 버튼 -->
            <div class="burger__icon">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </header>
        

    <!-- content ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->

    <!-- 상단 영상 부분 -->
    <section id="top">
        <video src="./video/NIKE - 너라는 위대함을 믿어..mp4" autoplay muted loop></video>
    </section>

    <!-- 첫번째 줄 -->
    <!-- <div id="first__section"> -->
        <!-- <section id="watching" class="h208"> -->
            <!-- <h3><?=$_SESSION['name']?>님의 시청중인 콘텐츠</h3>    h3 : 각 섹션 제목 -->
            <!-- <ul class="video__layout">        ul : 각 섹션 리스트 아이템 -->

                <!-- 추가 위치 -->
                <!-- 추가 할 코드 : <li><div class="h208__video video__item"><img src="#" alt="no" class="thumbnail"><div class="title__layout"><h3>#</h3></div></div></li> -->

            <!-- </ul> -->

            <!-- 이동 버튼 -->
            <!-- <div class="btn__locate h208__btn">
                <button class="move__btn left"><div class="left__arrow"></div></button>
                <button class="move__btn right"><div class="right__arrow"></div></button>
            </div>
        </section>
    </div> -->

    <section id="recommend" class="h208">
        <h3>홈트하우스PICK!! 오늘의 추천 홈트</h3>
        <ul class="video__layout">
        <?php 
                            $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
                            $sql = "select * from bundle where category = '5'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <li>
                                <a href="./player/player.php?type=<?=$row['video_name']?>">
                                <div class="h208__video video__item">
                                    <img src="<?=$row['thumbnail'].$row['video_name']?>.jpg" alt="no" class="thumbnail">
                                    <div class="title__layout">
                                        <h3><?=$row['video_name']?></h3>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
        </ul>
        <div class="btn__locate h208__btn">
            <button class="move__btn left"><div class="left__arrow"></div></button>
            <button class="move__btn right"><div class="right__arrow"></div></button>
        </div>
    </section>

    <section class="h260">
        <h3>오늘 하루 유산소 운동!!</h3>
        <ul class="video__layout">

            <!-- 추가 위치 -->
            <?php 
                            $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
                            $sql = "select * from bundle where category = '1'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <li>
                                <a href="./player/player.php?type=<?=$row['video_name']?>">
                                <div class="h260__video video__item">
                                    <img src="<?=$row['thumbnail'].$row['video_name']?>.jpg" alt="no" class="thumbnail">
                                    <div class="title__layout">
                                        <h3><?=$row['video_name']?></h3>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
            

        </ul>
        <div class="btn__locate h260__btn">
            <button class="move__btn left"><div class="left__arrow"></div></button>
            <button class="move__btn right"><div class="right__arrow"></div></button>
        </div>
    </section>

    <section id="rank" class="rank__layout">
        <h3 class="rank__title">인기만점! 콘텐츠 TOP10</h3>
        <div class="rank__div">
            <ul class="rank__video__line">

                <!-- 추가 위치 -->
                <?php 
                            $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
                            $sql = "select * from bundle where introduce like '랭크%'";
                            $result = mysqli_query($conn, $sql);
                            $numbar = 0;
                            while($row = mysqli_fetch_array($result)){
                            $numbar++;
                        ?>
                            <li>
                                <a href="./player/player.php?type=<?=$row['video_name']?>">
                                <div class="rank__video video__item">
                                    <div class="thumb__layout">
                                        <img src="./image/top10_png/<?=$numbar?>_number.png" alt="">
                                        <img src="<?=$row['thumbnail'].$row['video_name']?>.jpg" alt="no">
                                    </div>
                                    <div class="title__layout">
                                        <h3><?=$row['video_name']?></h3>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
                <!-- <li><div class="rank__video video__item"><div class="thumb__layout"><img src="#" alt="no"><img src="#" alt="no"></div><div class="title__layout"><h3>#</h3></div></div></li> -->
            
            </ul>
        </div>
    </section>

    <section class="h260 other">
        <h3>열쩡!! 열쩡!! 웨이트 홈트!</h3>
        <ul class="video__layout">

            <!-- 추가 위치 -->
            <?php 
                            $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
                            $sql = "select * from bundle where category = '3'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <li>
                                <a href="./player/player.php?type=<?=$row['video_name']?>">
                                <div class="h208__video video__item">
                                    <img src="<?=$row['thumbnail'].$row['video_name']?>.jpg" alt="no" class="thumbnail">
                                    <div class="title__layout">
                                        <h3><?=$row['video_name']?></h3>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
            <!-- <li><div class="h260__video video__item"><img src="#" alt="no" class="thumbnail"><div class="title__layout"><h3>#</h3></div></div></li> -->

        </ul>
        <div class="btn__locate h260__btn">
            <button class="move__btn left"><div class="left__arrow"></div></button>
            <button class="move__btn right"><div class="right__arrow"></div></button>
        </div>
    </section>

    <section class="h260 other">
        <h3>요가&필라테스</h3>
        <ul class="video__layout">
            
            <!-- 추가 위치 -->
            <?php 
                            $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
                            $sql = "select * from bundle where category = '4'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <li>
                                <a href="./player/player.php?type=<?=$row['video_name']?>">
                                <div class="h208__video video__item">
                                    <img src="<?=$row['thumbnail'].$row['video_name']?>.jpg" alt="no" class="thumbnail">
                                    <div class="title__layout">
                                        <h3><?=$row['video_name']?></h3>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
            <!-- <li><div class="h260__video video__item"><img src="#" alt="no" class="thumbnail"><div class="title__layout"><h3>#</h3></div></div></li> -->

        </ul>
        <div class="btn__locate h260__btn">
            <button class="move__btn left"><div class="left__arrow"></div></button>
            <button class="move__btn right"><div class="right__arrow"></div></button>
        </div>
    </section>

    <section id="children__HT" class="h260">
        <h3>어린이들을 위해 준비했어요! 어린이 홈트</h3>
        <ul class="video__layout">

            <!-- 추가 위치 -->
            <?php 
                            $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
                            $sql = "select * from bundle where vr_rank = '7'";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result)){
                        ?>
                            <li>
                                <a href="./player/player.php?type=<?=$row['video_name']?>">
                                <div class="h208__video video__item">
                                    <img src="<?=$row['thumbnail'].$row['video_name']?>.jpg" alt="no" class="thumbnail">
                                    <div class="title__layout">
                                        <h3><?=$row['video_name']?></h3>
                                    </div>
                                </div>
                                </a>
                            </li>
                        <?php
                            }
                        ?>
            <!-- <li><div class="h260__video video__item"><img src="#" alt="no" class="thumbnail"><div class="title__layout"><h3>#</h3></div></div></li> -->

        </ul>
        <div class="btn__locate h260__btn">
            <button class="move__btn left"><div class="left__arrow"></div></button>
            <button class="move__btn right"><div class="right__arrow"></div></button>
        </div>
    </section>


    <!-- footer ----------------------------------------------------------------------------------- -->

    <footer>
        <div id="footer__inner__layout">
            <a href="./index.php"><img src="./image/logo_f.png" alt="로고" id="footer__logo"></a>
            <ul id="footer__menu">
                <li><select name="" id="language"><option value="kor">한국어</option></select></li>
                <li>문의전화 : 080 - 000 - 0000</li>
                <li><a href="#">이용약관</a></li>
                <li><a href="#">개인정보 처리방침</a></li>
                <li><a href="#">고객센터</a></li>
                <li><a href="#">문의하기</a></li>
            </ul>
        </div>
    </footer>

    <!-- <div class="modal__layout">
        <div id="video__player">
            <video src="./video/test-video.webm" controls></video>
        </div>
        <div id="infor__content">
            <h1>infor__title</h1>
            <p>infor__content</p>
        </div>
        <div id="exit">
            <div class="xbar1"></div>
            <div class="xbar2"></div>
        </div>
    </div> -->
</body>
</html>