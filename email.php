<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이메일 인증</title>
    <link rel="stylesheet" href="./css/email.css">
    <script src="./js/email.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="container">
        <img src="./image/logo_w.png" alt="logo">
        <h3>이메일 주소 인증</h3>
        <div id="input__layout">
            <div id="write__email">
                <input type="text" name="email" placeholder="이메일">
                <input id="email__submit" type="submit" value="인증하기">
            </div>
            <div id="write__access__code">
                <input type="text" name="access__code" placeholder="이메일 인증코드">
                <input id="code__submit" type="submit" value="확인">
            </div>
        </div>
    </div>
</body>
</html>