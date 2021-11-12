<?php

$conn = mysqli_connect('localhost', 'root', '123456', 'ht');
$id = $_POST['id'];
$pass = $_POST['password'];

$sql = "select * from user where u_email = '$id'";
$result = mysqli_query($conn, $sql);
if(!$result){
    echo "<script>
    alert('아이디 올바르지않습니다.');
    history.back();
    </script>";
}
$row = mysqli_fetch_array($result);

if (password_verify($pass, $row['u_pass'])){
    session_start();
    $_SESSION['name'] = $row['u_name'];
    $_SESSION['id'] = $row['u_email'];
    $_SESSION['phone'] = $row['u_phone'];
    $_SESSION['rank'] = $row['u_rank'];
    $_SESSION['date'] = $row['date'];
    header("location: http://192.168.20.142/web/index.php");
}
else{
    echo "<script>alert('로그인실패.');
    history.back();
    </script>";
}
?>