<?php
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $name = $_POST['name'];
    $author = $_POST['author'];
    $teacher = $_POST['teacher'];
    $introduce = $_POST['introduce'];
    $category = $_POST['category'];
    $url = "/web/video/";
    $vr_rank = $_POST['vr_rank'];
    $_FILES['userfile']['name'] = $name.".mp4";
    $uploaddir = 'C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\web\video\\';
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        $sql = "insert into bundle(
            video_name,
            video_author,
            video_teacher,
            introduce,
            category,
            v_url,
            vr_rank,
            vd_date)
            values(
            '$name',
            '$author',
            '$teacher',
            '$introduce',
            '$category',
            '$url',
            '$vr_rank',
            now()
            )";
            // echo "<pre>";
            // echo $sql;
            $result = mysqli_query($conn, $sql);
    }
    else{
        print "파일 업로드 공격 가능성이 있습니다!\n";
    }
?>

<script>
    alert('영상 업로드가 되었습니다.');
    history.back();
</script>


