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
    <script src="./js/upload.js"></script>
</head>
<body>

    <!-- modal -->
    <div class="modal">
        <div class="upload__modal">
            <div class="title">
                <h3>컨텐츠 업로드</h3>
                <label for="cancle__btn">
                    <div id="exit">
                        <div class="xbar1"></div>
                        <div class="xbar2"></div>
                    </div>
                </label>
            </div>
            <div class="content__upload__div">
                <!-- <form id="upload__body" action="./php/upload.php" method="post" enctype="multipart/form-data">
                    <p>영상 업로드 <label for="input-file"><img src="./image/워황.png" alt=""></label><input type="file" name="userfile" id="input-file"></p>
                    <p>영상 이름 : <input type="text" name="name"></p>
                    <p>작가 : <input type="text" name="author"></p>
                    <p>강사 : <input type="text" name="teacher"></p>
                    <p>소개 : <input type="text" name="introduce"></p>
                    <p>카테고리 : <select name="">
                        <option value="">#</option>
                        <option value="">#</option>
                    </select></p>
                    <p>영상 등급 : <select name="">
                        <option value="">#</option>
                        <option value="">#</option>
                    </select></p>
                    <input type="submit" value="업로드">
                </form> -->

                <form action="./php/upload.php" method="post" enctype="multipart/form-data">
                    <div class="progress__div">
                        <div class="progress__top"><h5>세부정보</h5><h5>동영상요소</h5><h5>업로드</h5></div>
                        <div class="progress__bottom">
                            <img src="./image/png/c_1.png" alt="c_1" class="detail"><div class="progress__bar"></div><img src="./image/png/c_2.png" alt="c_2" class="video__element"><div class="progress__bar"></div><img src="./image/png/c_3.png" alt="c_3" class="upload">
                        </div>
                    </div>
                    <div class="video__infor__div">
                        <div class="video__infor__title"><h3>동영상정보</h3></div>
                        <input type="text" name="name" class="video__title bgcr outline__css" placeholder="제목">
                        <textarea name="introduce" cols="30" rows="10" class="video__introduce bgcr outline__css" placeholder="설명"></textarea>
                        <div class="thumbnail__upload__div">
                            <h5>동영상 썸네일</h5>
                            <div>
                                <label for="m_up"><img src="./image/png/m_up.png" alt=""></label>
                                <input type="file" accept="img/*" name="" id="m_up">
                                <img src="./image/png/thumbnail.png" alt="thumbnail" class="thumbnail">
                            </div>
                        </div>
                        <div class="video__upload__div">
                            <video src="#" controls></video>
                            <div class="input__div">
                                <label for="input-file"><img src="./image/png/video.png" alt=""></label>
                                <input type="file" accept="video/*" name="userfile" id="input-file">
                            </div>
                        </div>
                        <div class="other">
                            <p>작가</p><input type="text" name="author" class="bgcr">
                            <p>강사</p><input type="text" name="teacher" class="bgcr">
                            <div class="category">
                                <p>카테고리</p>
                                <select name="" class="bgcr">
                                    <option value="#">#</option>
                                    <option value="#">#</option>
                                    <option value="#">#</option>
                                    <option value="#">#</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="video__level">
                                <p>영상 등급</p>
                                <select name="" class="bgcr">
                                    <option value="411">전체이용가</option>
                                    <option value="7">7세</option>
                                    <option value="12">12세</option>
                                    <option value="15">15세</option>
                                    <option value="18">18세</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" value="업로드" class="upload__btn">
                        <input type="reset" value="취소" id="cancle__btn">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- header -->
    <header class="bgcr">
        <div id="header__div">
            <img src="./image/png/stutio_logo.png" alt="logo">
        </div>
    </header>


    <!-- content -->
    <main>

        <!-- aside -->
        <aside class="bgcr under__the__header">
            <div id="profile">
                <div id="profile__div">
                    <img id="profile__icon" src="./image/png/admin.png" alt="no">
                    <h3 id="profile__name">admin 님</h3>
                    <button id="logout__btn">로그아웃</button>
                </div>
            </div>
            <nav>
                <ul id="menu">
                    <li class="dashboard"><div class="front"><img id="dashboard__icon" src="./image/dachbord_icon/icon_wdashboard.png" alt="dashboard"></div><div class="back">대시보드</div></li>
                    <!-- <li id="member__trigger"><div class="front"><img src="./img/png/member_icon.png" alt="member"></div><div class="back">회원관리</div></li> -->
                    <li class="content"><div class="front"><img id="content__icon" src="./image/png/contents_icon.png" alt="content"></div><div class="back">컨텐츠</div></li>
                    <!-- <li id="analysis__trigger"><div class="front"><img src="./img/png/analysis_icon.png" alt="analysis"></div><div class="back">분석</div></li> -->
                </ul>
            </nav>
        </aside>


        <div id="right__side" class="bgcr under__the__header">
            <section>
                <div id="dashboard" class="con">
                    <section>
                        <h3 class="title">대시보드</h3>
                        <div>
                            <div class="inner__div">
                                <div id="upload__div">
                                    <img src="./image/png/video.png" alt="video__icon">
                                    <p>안녕하세요 관리자님<br>컨텐츠를 업로드 하시겠습니까?</p>
                                    <button class="content__upload__btn">컨텐츠 업로드</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div>
                            <div class="inner__div">
                                <h3>empty</h3>
                            </div>
                        </div> -->
                    </section>
                </div>
                <div id="content" class="con">
                    <!-- <img src="https://steamuserimages-a.akamaihd.net/ugc/845967181372614515/8CAA4452465F1A570FF93697205B3AADF337BFCD/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" alt="sooooon">
                    <h3 class="title">soon의 지속시간 120% 증가</h3> -->
                    <div class="content__layout">


                        <!-- php -->
                        <?php
                            while($row = mysqli_fetch_array($result)){
                        ?>
                    
                        <video src="<?=$row['v_url'].$row['video_name']?>.mp4" controls></video>
                    
                        <?php
                            }
                        ?>


                    </div>
                </div>
            </section>
            <footer>
                <div id="footer__inner__layout">
                    <a href="./index.php"><img src="./image/png/stutio_logo.png" alt="로고" id="footer__logo"></a>
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
        </div>
    </main>
</body>
</html>