<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이메일 인증</title>
    <link rel="stylesheet" href="./css/email.css">
    <script src="./js/email.js"></script>
</head>
<body>
    <div id="container">
        <a href="./login.php"><img src="./image/logo_w.png" alt="logo"></a>
        <h3>인증 코드 입력</h3>
        <div id="input__layout">
            <form id="write__access__code" action="./resister.php" method="post">
                <input type="text" name="code" placeholder="인증코드">
                <input type="submit" value="인증하기">
            </form>
        </div>
    </div>
</body>
</html>