<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Workout</title>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <div class="all">
        <!-- 헤더ㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓ -->
        <header>

            <!-- 좌측 -->
            <div class="left__bar">
            
                <!-- 로고 -->
                <img class="logo" src="image/logo_f.png">

                <!-- 네비 바 -->
                <ul class="nav">
                    <li onclick="Move('home')">HOME</li>
                    <li onclick="Move('today')">오늘의 홈트</li>
                    <li onclick="Move('recommend')">추천 홈트</li>
                    <li onclick="Move('popular')">인기 홈트</li>
                    <li onclick="a()">내가 찜한 콘텐츠</li>
                </ul>
            </div>

            <!-- 우측 -->
            <div class="right__bar">


                <!-- 검색 -->
                <!-- <div class="search__btn"></div> -->
                    <input type="text" name= "" class="search__bar">
                    <img onclick="showBar()" src="/image/search.png" alt="" class="search__icon">


                <!-- 우측 프로필 -->
                <div class="user">My Page</div>

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
                    <div>
                        <button>미리보기</button>
                        <button>운동시작</button>
                    </div>
            </article>

            <!-- 오늘의 홈트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="today" class="con__layout">
                <div class="contentTitle"><h1>오늘의 홈트</h1></div>
                <ul class="content">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <button class="con_btn"><div class="arrow"></div></button>
            </section>

            <!-- 추천홈트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="recommend" class="con__layout">
                <div class="contentTitle"><h1>추천홈트</h1></div>
                <ul class="content">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <button class="con_btn"><div class="arrow"></div></button>
            </section>

            <!-- 인기 홈트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="popular" class="con__layout">
                <div class="contentTitle"><h1>인기짱! 홈트 프로그램</h1></div>
                <ul class="content">
                    <li><div class="rank"><div>1위</div></div></li>
                    <li><div class="rank"><div>2위</div></div></li>
                    <li><div class="rank"><div>3위</div></div></li>
                    <li></li>
                </ul>
                <button class="con_btn"><div class="arrow"></div></button>
            </section>

            <!-- 시청중인 컨텐츠ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section id="recent" class="con__layout">
                <div class="contentTitle"><h1>시청중인 컨텐츠</h1></div>
                <ul class="content">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <button class="con_btn"><div class="arrow"></div></button>
            </section>

            <!-- 이벤트ㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡㅡ -->
            <section class="event__layout">
                <div><a href="#"></a></div>
            </section>
        </main>

        <!-- 푸터ㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓㅓ -->
        <footer>
            <img class="logo" src="image/logo_f.png">
            <ul>
                <li onclick="a()">회사소개</li>
                <li onclick="a()">고객센터</li>
                <li onclick="a()">이용약관</li>
                <li onclick="a()">개인정보 처리방침</li>
            </ul>
        </footer>
    </div>


    <div class="video__layout">
        <div id="video__player">
            <!-- <video src="./video/test-video.webm" controls></video> -->
            <iframe src="https://www.youtube.com/embed/9ORHbxFhMB0?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allowfullscreen></iframe>
            <div id="video__infor">영상 정보 영역</div>
        </div>
        <div id="exit">
            <div class="xbar1"></div>
            <div class="xbar2"></div>
        </div>
    </div>
</body>
</html>