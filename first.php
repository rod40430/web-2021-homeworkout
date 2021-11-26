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
        <div id="head">
            <div id="headContent">
                <div id="headText">
                    <p>홈트레이닝 영상을 무제한으로 보세요!</p>
                    <h3>다양한 디바이스에서 시청하세요. 언제든 해지하실 수 있습니다.</h3>
                    <h4>시청할 준비가 되셨나요? 맴버십을 등록하거나 재시작하려면 이메일 주소를 입력하세요.</h4>
                </div>
                <div id="headItrt">
                    <form method="POST" action="/web/login.php">
                        <input type="text" placeholder="이메일 주소 입력"><input type="submit" value="시작하기">
                    </form>
                </div>
            </div>            
            <div id="headLine">
                <div class="logo"><a href="/web/first.php"><img src="./image/logo_w.png"></a></div>
                <div class="other">
                    <select class="select">
                        <option>한국어</option>
                        <option>English</option>
                        <img src="./image/Down.PNG">
                    </select>
                    <a href="/web/login.php"><button class="button button1">로그인</button></a>
                </div>
            </div>
        </div>
        <div id="body">
            <div class="bodyContent1">
                <div class="content">
                    <section class="bodytext">
                <h3><div class="conttext1">TV로 즐기세요.</div><div class="conttext2"> 스마트 TV, PlayStation, Xbox, Chromecast, Apple TV<br> 블루레이 플레이어 등 다양한 디바이스에서 시청하세요.</div></h3>
                    </section>
                    <div class="Contentimg" id="Contentimg1"><img src="./image/conten1.png"></div>
                </div>
            </div>
            <div class="bodyContent2">
                <div class="content">
                    <div class="Contentimg" id="Contentimg2"><img src="./image/conten2.png"></div>
                    <section class="bodytext">
                <h1><div class="conttext3">즐겨 보는 콘텐츠를 저장해 오프라인으로<br>시청하세요.</div><div class="conttext4">간편하게 저장하고 빈틈없이 즐겨보세요.</div></h1>
                    </section>
                </div>
            </div>
            <div class="bodyContent3">
                <div class="content">
                    <section class="bodytext">
                <h3><div class="conttext5">다양한 디바이스에서 시청하세요.</div><div class="conttext6">각종 홈트레이닝 영상을 <br> 스마트폰, 태블릿, 노트북, TV에서 <br> 무제한으로 스트리밍하세요. 추가요금이 전혀 없습니다.</div></h3>
                    </section>
                    <div class="Contentimg" id="Contentimg3"><img src="./image/conten3.png"></div>
                </div>
            </div>
            <div class="bodyContent4">
                <div class="content">
                    <div class="Contentimg" id="Contentimg4"><img src="./image/conten4.png"></div>
                    <section class="bodytext">
                <h1><div class="conttext7">어린이 전용 프로필을<br>만들어 보세요. </div><div class="conttext8">어린이도 할 수 있는 간단한 운동을 쉽게 찾을 수 있습니다.<br>홈트 하우스의 회원이라면 무료입니다.</div></h1>
                    </section>
                </div>
            </div>
            <div id="foot">
            <div id="footContent">
                <h5>질문이 있으신가요? 문의 전화: XXX-XXX-XXXX</h5>
            <table class="table">
                <tr class="tr"><td class="td"><h6>회사소개</h6></td><td class="td"><h6>고객센터</h6></td><td class="td"><h6>이용약관</h6></td><td class="td"><h6>개인정보 처리방침</h6></td></tr>
            </table>
            <select class="select">
                <option>한국어</option>
                <option>English</option>
            </select>
            </div>
        </div>
        </div>          
    </div>
</body>
</html>