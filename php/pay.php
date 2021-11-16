<?php
    ini_set('display_errors', '0');
    session_start();
    ini_set('display_errors', '0');
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $userid = $_SESSION['id'];
    $p_type = $_POST['p_type'];
    $p_card = $_POST['p_card'];
    $sql = "select * from pay where u_email = '$userid'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row['p_card'] == $p_card){
        echo "
        <script>
        alert('이미 등록된 카드입니다.');
        history.back();
        </script>";
    }
    else{
        $sql =  "insert into pay(p_card, p_type, u_email) 
        values('$p_card', '$p_type', '$userid')";
        $result = mysqli_query($conn, $sql);
        
    echo "
    <script>
    alert('Pay등록 완료.');
    history.back();`
    </script>";
    }
?>