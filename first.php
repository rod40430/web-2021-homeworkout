<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
    <link rel="stylesheet" href="./css/first.css" type="text/css">
    <script src="./js/first.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="background">
        <div id="head" class="scroll">
            <div id="headContent">
                <div id="headText">
                    <p>홈트레이닝 영상을 무제한으로 보세요!</p>
                    <h3>다양한 디바이스에서 시청하세요. 언제든 해지하실 수 있습니다.</h3>
                    <h4>시청할 준비가 되셨나요? 맴버십을 등록하거나 재시작하려면 이메일 주소를 입력하세요.</h4>
                </div>
                <div id="headItrt">
                    <form method="POST" action="http://192.168.20.142/web/login.php">
                        <input type="text" placeholder="이메일 주소 입력"><input type="submit" value="시작하기">
                    </form>
                </div>
            </div>            
            <div id="headLine">
                <div class="logo"><a href="http://192.168.20.142/web/first.php"><img src="./image/logo_w.png"></a></div>
                <div class="other">
                    <select class="select">
                        <option>한국어</option>
                        <option>English</option>
                        <img src="./image/Down.PNG">
                    </select>
                    <a href="http://192.168.20.142/web/login.php"><button class="button button1">로그인</button></a>
                </div>
            </div>
        </div>
        <div id="body">
            <div class="bodyContent1 scroll">
                <div class="content">
                    <section class="bodytext">
                <h3><div class="conttext1">TV로 즐기세요.</div><div class="conttext2"> 스마트 TV, PlayStation, Xbox, Chromecast, Apple TV<br> 블루레이 플레이어 등 다양한 디바이스에서 시청하세요.</div></h3>
                    </section>
                    <div class="Contentimg" id="Contentimg1"><img src="./image/conten1.png"></div>
                </div>
            </div>
            <div class="bodyContent2 scroll">
                <div class="content">
                    <div class="Contentimg" id="Contentimg2"><img src="./image/conten2.png"></div>
                    <section class="bodytext">
                <h1><div class="conttext3">즐겨 보는 콘텐츠를 저장해 오프라인으로<br>시청하세요.</div><div class="conttext4">간편하게 저장하고 빈틈없이 즐겨보세요.</div></h1>
                    </section>
                </div>
            </div>
            <div class="bodyContent3 scroll">
                <div class="content">
                    <section class="bodytext">
                <h3><div class="conttext5">다양한 디바이스에서 시청하세요.</div><div class="conttext6">각종 홈트레이닝 영상을 <br> 스마트폰, 태블릿, 노트북, TV에서 <br> 무제한으로 스트리밍하세요. 추가요금이 전혀 없습니다.</div></h3>
                    </section>
                    <div class="Contentimg" id="Contentimg3"><img src="./image/conten3.png"></div>
                </div>
            </div>
            <div class="bodyContent4 scroll">
                <div class="content">
                    <div class="Contentimg" id="Contentimg4"><img src="./image/conten4.png"></div>
                    <section class="bodytext">
                <h1><div class="conttext7">어린이 전용 프로필을<br>만들어 보세요. </div><div class="conttext8">어린이도 할 수 있는 간단한 운동을 쉽게 찾을 수 있습니다.<br>홈트 하우스의 회원이라면 무료입니다.</div></h1>
                    </section>
                </div>
            </div>
            <div id="foot" class="scroll">
            <div id="footContent">
                <div>
                    <p class="foot_text1">다양한 디바이스에서 홈트하우스를 시청하세요</p>
                    <p class="foot_text2">즐겨 사용하시는 디바이스에서 홈트 하우스의 모든 영상을 <br> 시청 하실 수 있습니다.</p>
                </div>
                <div class="foot_img">
                    <!-- <div><img src="./image/device_icon/footer_tv.png" alt=""><p>TV</p></div>
                    <div><img src="./image/device_icon/footer_computer.png" alt=""><p>컴퓨터</p></div>
                    <div><img src="./image/device_icon/footer_tablet.png" alt=""><p>휴대폰&태블릿</p></div>
                    <div><img src="./image/device_icon/footer_gameconsole.png" alt=""><p>게임콘솔</p></div> -->
                    <div>
                        <img id="TV" src="./image/device_icon/footer_tv.png" alt="">
                        <img id="cp" src="./image/device_icon/footer_computer.png" alt="">
                        <img id="tb" src="./image/device_icon/footer_tablet.png" alt="">
                        <img id="gc" src="./image/device_icon/footer_gameconsole.png" alt="">
                    </div>
                    <div>
                        <p class="TV">TV</p>
                        <p class="computer">컴퓨터</p>
                        <p class="tablet">휴대폰&태블릿</p>
                        <p class="gameconsole">게임콘솔</p>
                    </div>
                </div>
                <div id="foot_Q">
                    <p>자주묻는 질문</p>
                    <div class="Q_text"><p>홈트하우스란 무엇인가요?</p><button>+</button></div>
                    <div class="Q_text"><p>홈트하우스에서 어떤 컨텐츠를 시청할 수 있나요?</p><button>+</button></div>
                    <div class="Q_text"><p>홈트하우스의 요금은 얼마 인가요?</p><button>+</button></div>
                    <div class="Q_text"><p>홈트하우스는 어디에서 시청할 수 있나요?</p><button>+</button></div>
                    <div class="Q_text"><p>멤머쉽을 해제하려면 어떻게 해야 하나요?</p><button>+</button></div>
                </div>
            </div>
            </div>
        <div id="foot_bottom" class="scroll">
            <div class="bottom1"><img src="./image/logo_w.png" alt=""></div>
            <div class="bottom2"><select><option>한국어</option><option>English</option></select><p>문의전화 : 080 - 000 - 000</p><p>이용약관</p><p>개인정보 처리방침</p><p>고객센터</p><p>문의하기</p></div>
        </div>
        </div>          
    </div>
</body>
</html>