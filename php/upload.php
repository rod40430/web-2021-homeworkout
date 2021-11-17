<?php
    $uploaddir = 'C:\Bitnami\wampstack-8.0.3-0\apache2\htdocs\web\video\\';
    $uploadfile = $uploaddir.basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
    }
    else{
        print "파일 업로드 공격 가능성이 있습니다!\n";
    }
    echo "자세한 디버깅 정보입니다.";
    print_r($_FILES);
    print "</pre>";
?>
<video src="<?=$_FILES['userfile']['name']?>"></video>
