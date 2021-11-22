<?php
ini_set('display_errors', '0');
$conn = mysqli_connect('localhost', 'root', '123456', 'ht');

$id = $_POST['j_id'];
$pass = $_POST['j_password'];
$passck = $_POST['j_pass_ck'];
$name = $_POST['j_name'];
$phone = $_POST['j_phone'];

$sqlid = "select * from user where u_email = '$id'";
$result = mysqli_query($conn, $sqlid);
$row = mysqli_fetch_array($result);

if($pass != $passck){
    echo "<script>alert('비밀번호가 일치하지않습니다.');
    location.href = '/web/resister.php';
    </script>";
}
else if($id == null || $pass == null || $name == null || $phone == null) {
    echo "<script>alert('아직 입력안한 창이있습니다.');
    location.href = '/web/resister.php';
    </script>";
}
else if ($id == $row['u_email']){
    echo "<script>alert('중복되는 아이디가 있습니다.');
    location.href = '/web/resister.php';
    </script>";
}
else{
$pass = password_hash($pass, PASSWORD_DEFAULT);
$sql = "insert into user 
(u_email, u_pass, u_name, u_phone, date, u_rank)
values('$id', '$pass', '$name', '$phone', now(), 0)";
$result = mysqli_query($conn, $sql);

    if($result)
    {
        echo "
        <script>
            alert('회원가입이 완료되었습니다.');
            location.href = '/web/index.php';
        </script>
        ";
    }
}
?>