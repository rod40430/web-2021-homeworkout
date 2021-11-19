<?php
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

    $type();
?>