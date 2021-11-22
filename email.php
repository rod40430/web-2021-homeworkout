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
        <img src="./image/logo_w.png" alt="logo">
        <h3>이메일 주소 인증</h3>
        <div id="input__layout">
            <form id="write__email" action="./php/email.php" method="post">
                <input type="email" name="email" placeholder="이메일">
                <input id="email__submit" type="submit" value="인증하기">
            </form>
        </div>
    </div>
</body>
</html>