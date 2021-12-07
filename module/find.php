<?php
    function findid() {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $phone = $_POST["phone"];
        $name = $_POST["name"];
        $sql = "select * from user where u_phone = $phone && u_name = '$name'";
        $result = mysqli_query($conn, $sql);
        $userid = $result["u_email"];
        if($result){
            echo "
            <script>
                alert('아이디는 $userid');
            </script>";
        }else{
            echo "
            <script>
                alert('일치하는 정보가 없습니다.');
            </script>";
        }
    }

    function findpass() {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $_SESSION["id"] = $_POST["email"];
        $sql = "select * from user where u_email = '$_SESSION[id]'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "
            <script>
                alert('이메일 인증 후 비밀번호 변경창으로 넘어갑니다.');
            </script>";
        }else{
            echo "
            <script>
                alert('아이디가 일치하지 않습니다.');
            </script>";
        }
    } 
?>