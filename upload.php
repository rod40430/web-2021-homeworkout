<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>업로드</title>
</head>
<body>
<form action="./php/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="userfile" id="upload"><br>
    <input type="submit" value="업로드">
</form>

</body>
</html>