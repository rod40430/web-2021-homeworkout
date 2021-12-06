<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        *{
        margin: 0;
        padding: 0;
        color: white;
    }
    body{
        overflow: hidden;
        position: relative;
        /* background-color: #2b2b2b; */
        height: 100vh;
        background-image: url(<?=$link?>);
        /* background-repeat: no-repeat; */
        /* background-size: cover; */
    }
    .void__update, .id__update, .pass__update, .phone__update{
        width: 24vmax;
        height: 50vmin;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        background-color: #2b2b2b;
        border-radius: 1vmin;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    h1{
        width: 17vmax;
        margin-bottom: 2vmin;
        cursor: default;
    }
    form p{
        margin-bottom: 1.6vmin;
    }
    form input{
        height: 5.6vmin;
        width: 16vmax;
        border: 0;
        border-radius: 1vmin;
        background-color: #787878;
        color: white;
        padding: 0 0.5vmax;
    }
    form input::placeholder{
        color: #cbcbcb;
    }
    form p:last-child input{
        background-color: #fe7373;
        color: white;
        font-size: 1rem;
        font-weight: bold;
        cursor: pointer;
        width: 17vmax;
    }
    form input:hover{
        outline: 2px solid aliceblue;
    }
    </style>
</head>
<body>

<?php
    ini_set('display_errors', '0');
    session_start();
    $type = $_GET['type'];
    
    function idupdate() {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $userid = $_SESSION['id'];
        $sql = "select * from user where u_email = '$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo'
        <div class="id__update">
            <h1>아이디 변경</h1>
            <form action="./updatedb.php?type=idupdate" method="POST">
                <p><input type="email" name="idupdate" value="'.$row["u_email"].'"></p>
                <p><input type="submit" value="변경하기"></P>
            </form>
        </div>
        ';
    }

    function passupdate() {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $userid = $_SESSION['id'];
        $sql = "select * from user where u_email = '$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo'
        <div class="pass__update">
            <h1>비밀번호 변경</h1>
            <form action="./updatedb.php?type=passupdate" method="POST">
                <p><input type="password" name="pass" placeholder="기존 비밀번호"></p>
                <p><input type="password" name="updatepass" placeholder="새 비밀번호"></p>
                <p><input type="password" name="passck" placeholder="비밀번호 확인"></p>
                <p><input type="submit" value="변경하기"></P>
            </form>
        </div>
        ';
    }

    function phoneupdate() {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $userid = $_SESSION['id'];
        $sql = "select * from user where u_email = '$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo'
        <div class="phone__update">
            <h1>핸드폰번호 변경</h1>
            <form action="./updatedb.php?type=phoneupdate" method="POST">
                <p><input type="text" name="phoneupdate" value="'.$row["u_phone"].'"></p>
                <p><input type="submit" value="변경하기"></P>
            </form>
        </div>
        ';
    }
    
    $type();
?>

</body>
</html>