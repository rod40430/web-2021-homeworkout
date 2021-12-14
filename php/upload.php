<?php
    $conn = mysqli_connect('localhost', 'root', '123456', 'ht');
    $name = $_POST['name'];
    $author = $_POST['author'];
    $teacher = $_POST['teacher'];
    $introduce = $_POST['introduce'];
    $category = $_POST['category'];
    $vr_rank = $_POST['vr_rank'];


    $url = "/web/video/";
    $_FILES['userfile']['name'] = $name.".mp4";
    $uploaddir = 'C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\web\video\\';
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

    $url2 = "/web/thumbnail/";
    $_FILES['thumbnail']['name'] = $name.".jpg";
    $uploaddir2 = 'C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\web\thumbnail\\';
    $uploadfile2 = $uploaddir2.basename($_FILES['thumbnail']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) && move_uploaded_file($_FILES['thumbnail']['tmp_name'], $uploadfile2)){
        $sql = "insert into bundle(
            video_name,
            video_author,
            video_teacher,
            introduce,
            category,
            v_url,
            vr_rank,
            vd_date,
            thumbnail)
            values(
            '$name',
            '$author',
            '$teacher',
            '$introduce',
            '$category',
            '$url',
            '$vr_rank',
            now(),
            '$url2'
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


