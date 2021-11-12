<?php
session_start();
session_destroy();
?>
<script>
    alert("로그아웃되었습니다.");
    location.href = "http://192.168.20.142/web/%EB%A1%9C%EA%B7%B8%EC%9D%B8/index.php";
</script>