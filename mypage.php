<?php
    session_start();
    ini_set('display_errors', '0');
    if(isset($_SESSION['name'])){}
    else{
        echo '
        <script>
        alert("로그인을 해주세요.");
        location.href = "http://192.168.20.142/web/login.php";
        </script>
        ';
    }
    
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $userid = $_SESSION['id'];
    $sql = "select * from user where u_email = '$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    
    $sql2 = "select * from pay where u_email = '$userid'";
    $result2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($result2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
    <link rel="stylesheet" href="./css/mypage.css">
    <script src="./js/mypage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>


    <div id="modal">
        <div id="pay__modal">
            <form action="./php/pay.php" method="POST">
                <select name="p_type">
                    <option value="신한">신한</option>
                    <option value="농협">농협</option>
                    <option value="하나">하나</option>
                    <option value="제주">제주</option>
                </select>
                <input class="textArea" type="text" name="p_card">
                <div id="cardNum">
                    <input class="textArea cardNum" type="text" name=""><input class="textArea cardNum" type="password" name="">
                </div>
                <div class="btnArea">
                <input class="cardNum" type="submit" value="등록"><input id="cancle" class="cardNum" type="reset" value="취소">
                </div>
            </form>
        </div>
    </div>




    <header>
        <div class="left__bar">
            <a href="./index.php"><img class="logo" src="./image/logo_f.png"></a>
        </div>

        <div class="right__bar">

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
                        <h3 id="user__name">u_name</h3>
                    </div>
                    <ul id="acc__menu">
                        <li><a href="#">계정</a></li>
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

    <section>

        <div id="MyPage__title"><h3>My Page</h3></div>

        <section id="user__account__infor">
            <div id="user__account" class="wrap"><h3><?=$row['u_name'];?>님의 계정</h3></div>
            <div id="user__infor" class="wrap flexs">
                <div class="front flexs columns">
                    <h3>멤버십</h3>
                    <button class="memb__cancle">멤버십 해지</button>
                </div>
                <section class="back flexs">
                    <div class="user_php">
                        <div><?=$row['u_email']?></div>
                        <div>비밀번호 : *********</div>
                        <div><?=$row['u_phone']?></div>
                    </div>
                    <div class="flexs columns txt__align__back">
                        <a href="./php/modify.php">이메일 주소 변경</a>
                        <a href="./php/modify.php">비밀번호 변경</a>
                        <a href="./php/modify.php">휴대폰번호 변경</a>
                    </div>
                </section>  
            </div>
            <div id="payment__infor" class="flexs wrap">
                <div class="front flexs columns">
                    <h3>결제정보</h3>
                    <button class="memb__cancle pay__plus">결제 수단 등록</button>
                </div>
                <section class="flexs back">
                    <div class="user_php">
                        <div><?=$row2['p_type'];?> : <?=$row2['p_card'];?></div>
                    </div>
                    <div class="flexs columns txt__align__back">
                        <a href="#">결제정보 관리</a>
                        <a href="#">예비결제 수단 등록</a>
                        <a href="#">결제일 변경</a>
                    </div>
                </section>
            </div>
            <div id="memBship__detail__infor" class="wrap flexs">
                <h3 class="front">멤버십 상세 정보</h3>
                <section class="back">
                    <div>
                        <h3>php</h3>
                    </div>
                </section>
            </div>
            <div id="set__profile__img" class="wrap flexs">
                <h3 class="front">프로필 사진 설정</h3>
                <section class="back flexs">
                    <div class="profile__imgs flexs"><img src="./image/profile/profile2.png" alt="카드값줘 체리"><a href="#">카드값줘 체리</a></div>
                    <div class="profile__imgs flexs"><img src="./image/profile/profile3.png" alt="짱구는 옷말려"><a href="#">짱구는 옷말려</a></div>
                    <div class="profile__imgs flexs"><img src="./image/profile/profile4.png" alt="빛나는 비바리"><a href="#">빛나는 비바리</a></div>
                </section>
            </div>
        </section>
    </section>
</body>
</html>