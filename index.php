<?php
session_start();
ini_set('display_errors', '0');
if(isset($_SESSION['id'])){
    echo "
    <script>
    alert('{$_SESSION['name']}님 환영합니다.');
    </script>
    ";
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
    <div class="all">
        <!-- 헤더ㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓ -->
        <header>

            <!-- 좌측 -->
            <div class="left__bar">
            
                <!-- 로고 -->
                <a href="./index.php"><img class="logo" src="image/logo_f.png"></a>

                <!-- 네비 바 -->
                <ul class="nav">
                    <li onclick="Move('home')">HOME</li>
                    <li onclick="Move('today')">오늘의 홈트</li>
                    <li onclick="Move('recommend')">추천 홈트</li>
                    <li onclick="Move('popular')">인기 홈트</li>
                    <li onclick="soon()">내가 찜한 콘텐츠</li>
                </ul>
            </div>

            <!-- 우측 -->
            <div class="right__bar">


                <!-- 검색 -->
                <!-- <div class="search__btn"></div> -->
                    <input type="text" name= "" class="search__bar">
                    <img src="./image/search.png" alt="" class="search__icon" onclick="ShowBar()">


                <!-- 우측 프로필 -->
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
                            <h3 id="user__name"><?=$_SESSION['name']?></h3>
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
        
        <!-- 바디ㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣㅣ -->
        <main>
            

            <!-- 맨 위 보일 것ㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅㅅ -->
            <article id="home" class="head__layout">
                    <div class="top__video">
                        <!-- <iframe id="ifrm__player" src="https://www.youtube.com/embed/2FiQu3ueCjU?color=white" frameborder="0" allowfullscreen></iframe> -->
                        <video class="a" src="./video/NIKE - 너라는 위대함을 믿어..mp4" autoplay muted loop></video>
                    </div>
                    <div class="start__btn">
                        <button>미리보기</button>
                        <button id="start">운동시작</button>
                    </div>
            </article>

            <!-- 오늘의 홈트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="today" class="con__layout">
                <div class="contentTitle"><h1>오늘의 홈트</h1></div>
                <ul class="content">

                    <li>
                        <div class="video__item__layout">

                            <!-- 영상 정보 아이콘 -->
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>

                            <!-- 영상 정보 -->
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>

                            <!-- 영상 썸네일 -->
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/yoga.jpg" alt="no">
                            </div>

                        </div>
                    </li>
                    
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/ball.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/kid.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/hr1.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="btn__locate">
                    <button class="move__btn"><div class="left__arrow"></div></button>
                    <button class="move__btn"><div class="right__arrow"></div></button>
                </div>
            </section>

            <!-- 추천홈트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="recommend" class="con__layout">
                <div class="contentTitle"><h1>추천홈트</h1></div>
                <ul class="content">
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/c1.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/yoga2.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/hr2.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/stretch.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="btn__locate">
                    <button class="move__btn"><div class="left__arrow"></div></button>
                    <button class="move__btn"><div class="right__arrow"></div></button>
                </div>
            </section>

            <!-- 인기 홈트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="popular" class="con__layout">
                <div class="contentTitle"><h1>인기짱! 홈트 프로그램</h1></div>
                <ul class="content">
                    <li>
                        <div class="video__item__layout">
                            <div class="rank"><div>1위</div></div>
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/couple.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="rank"><div>2위</div></div>
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/family.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="rank"><div>3위</div></div>
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/senior.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/muscle.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="btn__locate">
                    <button class="move__btn"><div class="left__arrow"></div></button>
                    <button class="move__btn"><div class="right__arrow"></div></button>
                </div>
            </section>

            <!-- 시청중인 컨텐츠ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="recent" class="con__layout">
                <div class="contentTitle"><h1>시청중인 컨텐츠</h1></div>
                <ul class="content">
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/hr3.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/hs.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/ph.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="video__item__layout">
                            <div class="infor__icon__layout">
                                <div class="infor__icon">i</div>
                                <div class="close__infor__icon">
                                    <div class="xbar1"></div>
                                    <div class="xbar2"></div>
                                </div>
                            </div>
                            <div class="video__infor__layout">
                                <div class="video__infor__summary">
                                    <div class="summary__content">
                                        <h3>영상 제목</h3>
                                        <p>요약 내용<br>이제 비공개로 인터넷을 탐색할 수 있으며, 이 기기를 사용하는 다른 사용자가 내 활동을 볼 수 없습니다. 하지만 다운로드, 북마크, 읽기 목록 항목은 계속해서 저장됩니다. 자세히 알아보기</p>
                                        <p>lsdfa;j</p>
                                    </div>
                                </div>
                            </div>
                            <div class="video__thumb__layout">
                                <img src="./image/jpg/kid2.jpg" alt="no">
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="btn__locate">
                    <button class="move__btn"><div class="left__arrow"></div></button>
                    <button class="move__btn"><div class="right__arrow"></div></button>
                </div>
            </section>

            <!-- 이벤트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section class="event__layout">
                <div><a href="#"><img src="./image/jpg/event.jpg" alt=""></a></div>
            </section>
        </main>

        <!-- 푸터ㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓ -->
        <footer>
            <a href="./index.php"><img class="logo" src="image/logo_f.png"></a>
            <ul>
                <li onclick="soon()">회사소개</li>
                <li onclick="soon()">고객센터</li>
                <li onclick="soon()">이용약관</li>
                <li onclick="soon()">개인정보 처리방침</li>
            </ul>
        </footer>
    </div>

    <!-- 영상 창ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ -->
    <div class="modal__layout">

        <!-- 영상 재생 창ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ -->
        <div id="video__player">
            <video src="./video/test-video.webm" controls></video>
            <!-- <iframe id="ifrm__player" src="https://www.youtube.com/embed/9ORHbxFhMB0" frameborder="0" allowfullscreen></iframe> -->
        </div>

        <!-- 영상 정보 창ㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇㅇ -->
        <div id="infor__content">
            <h1>infor__title</h1>
            <p>infor__content</p>
        </div>

        <!-- X 버튼ㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴㄴ -->
        <div id="exit">
            <div class="xbar1"></div>
            <div class="xbar2"></div>
        </div>
    </div>
</body>
</html>