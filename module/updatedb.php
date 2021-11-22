<?php
    ini_set('display_errors', '0');
    session_start();
    $type = $_GET['type'];

    function idupdate () {
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $userid = $_SESSION['id'];
    $idupdate = $_POST['idupdate'];
    $sql = "update user set u_email = '$idupdate' where u_email = '$userid'";
    $result = mysqli_query($conn, $sql);
    $_SESSION['id'] = $idupdate;
    echo "<script>
            alert('이메일 변경이 완료되었습니다.');
            location.href = '/web/index.php';
            </script>";
    }

    function passupdate () {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $userid = $_SESSION['id'];
        $sql = "select * from user where u_email = '$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        $pass = $_POST['pass'];
        if (password_verify($pass, $row['u_pass']) && $_POST['updatepass'] == $_POST['passck']){
            $passupdate = $_POST['updatepass'];
            $passupdate = password_hash($passupdate, PASSWORD_DEFAULT);
            $sql = "update user set u_pass = '$passupdate' where u_email = '$userid'";
            $result = mysqli_query($conn, $sql);
            echo "<script>
                    alert('비밀번호 변경이 완료되었습니다.');
                    location.href = '/web/index.php';
                 </script>";
        }else{
            echo "<script>
                    alert('비밀번호가 일치하지않습니다..');
                    history.back();
                 </script>";
        }
    }

    function phoneupdate () {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $userid = $_SESSION['id'];
        $phoneupdate = $_POST['phoneupdate'];
        $sql = "update user set u_phone = '$phoneupdate' where u_email = '$userid'";
        $result = mysqli_query($conn, $sql);
        $_SESSION['phone'] = $phoneupdate;
        echo "<script>
            alert('핸드폰번호 변경이 완료되었습니다.');
            location.href = '/web/index.php';
            </script>";
    }

    $type();
?>