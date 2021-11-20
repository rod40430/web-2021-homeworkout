<?php
    session_start();
    $type = $_GET['type'];
    
    function idupdate() {
        $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
        $userid = $_SESSION['id'];
        $sql = "select * from user where u_email = '$userid'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo'
        <h1>아이디 변경</h1>
        <form action="./updatedb.php?type=idupdate" method="POST">
            <p><input type="email" name="idupdate" value="'.$row["u_email"].'"></p>
            <p><input type="submit" value="변경하기"></P>
        </form>
        ';
    }
    
    $type();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

</body>
</html>