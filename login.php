<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="./css/login.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="./js/login.js"></script>
</head>
<body>
    <div>
        <!-- <a href="#" id="l_btn" onclick="dis()">로그인</a> -->
    </div>



        <div id="login">
            <section class="login1">
                <!-- <img class="logo" src="img/logo_w.png"> -->
                <div id="lcon">
                    <a href="./first.php"><img class="logomain" src="./image/logo_w.png"></a>
                    <div class="logintext">최신 홈트 영상들과 인기있는 홈트 영상들을<br>언제 어디에서나 다양한 디바이스에서<br>무제한으로 즐길실 수 있습니다.</div>
                    <form method="post" action="./module/user.php?type=login">
                        <input class="id" type="email" placeholder="아이디" name="id"><br>
                        <input class="pass" type="password" placeholder="비밀번호" name="password"><br>
                        <div class="I_cb"><input type="checkbox" class="cb"> <div class="l_infor">아이디 저장</div></div> <br>
                        <input type="submit" value="로그인" id="login_button"><br>
                    </form>
                <div class="other">
                <a href="#" class="h_join" id="id_find" onclick="find_id1(), button('f_button1')">아이디 찾기</a>
                <div class="h_join">|</div>
                <a href="#" class="h_join" id="pass_reset"onclick="find_id2(), button('f_button2')">비밀번호 찾기</a>
                <div class="h_join">|</div>
                <a href="#" class="h_join" id="user_join"onclick="join_member()">회원가입</a>
                </div> 
                <div class="etc_text">다른 계정 서비스로 로그인</div><br>
                <div class="etc">
                <div><img class="img" src="./image/KKo.JPG"></div>
                <div><img class="img" src="./image/naver.JPG"></div>
                <div><img class="img" src="./image/google.JPG"></div>
                <div><img class="img" src="./image/apple.JPG"></div>
                </div>
            </div>
            </section>

    <!-- <footer>
        <img class="logo" src="img/logo_w.png">
        <ul>
            <li onclick="a()">회사소개</li>
            <li onclick="a()">고객센터</li>
            <li onclick="a()">이용약관</li>
            <li onclick="a()">개인정보 처리방침</li>
        </ul>
    </footer> -->
    </div>
    <div id="find">
        <section class="find1">
            <a href="./login.php"><img class="find_logo" src="./image/logo_w.png"></a>
            <div id="fcon">
                <button id="f_button1" class="uj_button1" >아이디 찾기</button>
                <button id="f_button2" class="uj_button2" >비밀번호 재설정</button>
                <form method="post" action="#">
                    <div class="cbs">
                    <div class="f_cb"><input type="radio" class="phone" name="f_radio" onclick="phone(this)"> <div class="f_infor">휴대폰 번호</div></div> 
                    <div class="f_cb"><input type="radio" class="e-mail" name="f_radio" onclick="e_mail(this)"> <div class="f_infor">이메일 주소</div></div> <br>
                    </div>
                    <input class="find_name" type="text" placeholder="이름" name="uname"><br>
                    <input class="find_phone_mail" type="text" id="find_phone_mail" placeholder="인증할 수단을 선택해주세요(휴대폰 혹은 이메일)" name="phone_mail"><br>
                    <input type="button" value="확인" id="find_button" onclick="heal()"><br>
                </form>
            </div>
        </section>
    </div>
    <div id="j_m">
        <section class="join_member">
            <a href="./login.php"><img class="jm_logo" src="./image/logo_w.png"></a>
            <div id="jcon">
                <div class="join_text">회원가입</div>
                <form method="post" action="./php/signup.php">
                    <div class="u_infor"><div class="j_text">이메일</div><input class="j_id" type="email" name="j_id"></div><br>
                    <div class="u_infor"><div class="j_text">비밀번호</div><input class="j_pass" type="password" name="j_password"></div><br>
                    <div class="u_infor"><div class="j_text">비밀번호 확인</div><input class="j_pass_ck" type="password" name="j_pass_ck"></div><br>
                    <div class="u_infor"><div class="j_text">이름</div><input class="j_name" type="text" name="j_name"></div><br>
                    <div class="u_infor"><div class="j_text">휴대번호</div><input class="j_phone" type="text" name="j_phone" placeholder="번호만 입력해주세요."></div><br>
                    <input type="submit" value="회원가입" id="user_button"><br>
            </div>
        </section>
    </div>
    <div id="u_j">
        <section class="user_join1">
            <a href="./login.php"><img class="uj_logo" src="./image/logo_w.png"></a>
            <div id="ucon">
                <div class="ck_user">본인인증</div>
                <div class="join_ck">인증방식 선택</div>
                <div class="button_boder1">
                <button id="u_button1" onclick="button()">휴대폰 본인 인증</button>
                <div class="button_boder2"></div>
                <button id="u_button2" onclick="button()">이메일 인증</button>
                </div>
                <div class="ck_text">다음 약관에 동의해주세요</div>
                <form method="post" action="#">
                    <div class="s_ucon">
                    <div class="all_text"><input  type="checkbox" id="all_ck" name="all_check" onclick="selectAll(this)">전체동의</div>
                    <div class="user1_text"><div class="user_kc"><input  type="checkbox" class="user_ck" name="check" onclick="checkSelectAll()">[필수]이용약관 동의</div> <div class="kc1" onclick="ag('user1', '1')"><a href="#" class="a_kc"> > </a></div></div>
                    <div class="user1_s_text">이용약관</div>
                    <div class="user2_text"><div class="user_kc"><input  type="checkbox" class="user_ck" name="check" onclick="checkSelectAll()">[필수]개인정보 수집 및 이용동의</div> <div class="kc2" onclick="ag('user2','2')"> <a href="#" class="a_kc">></a></div></div>
                    <div class="user2_s_text">개인정보 수집 및 이용동의</div>
                    <div class="user3_text"><div class="user_kc"><input  type="checkbox" class="user_ck" name="check" onclick="checkSelectAll()">[필수]개인정보 제공 동의</div> <div class="kc3" onclick="ag('user3','3')"> <a href="#" class="a_kc">></a></div></div>
                    <div class="user3_s_text">개인정보 동의</div>
                    <div class="ev_text"><div class="user_kc"><input  type="checkbox" class="user_ck" name="check" onclick="checkSelectAll()">[선택]할인및 이벤트 소식 메일 수신 동의</div> <div class="kc4" onclick="ag('ev','4')"><a href="#" class="a_kc">></a></div></div>
                    <div class="ev_s_text">이벤트 내용</div>
                    </div>
                    <input type="button" value="확인" id="user_button" onclick="join_user()"><br>
                </form>
            </div>
        </section>
    </div>
</body>
</html>