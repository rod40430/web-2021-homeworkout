<?php
session_start();
session_destroy();
?>
<script>
    alert("로그아웃되었습니다.");
    location.href = "http://192.168.20.142/web/login/index.php";
</script>