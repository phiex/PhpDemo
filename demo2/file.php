<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>上传文件</title>
</head>
<body>
   <h1>上传文件</h1>
   <form action="Handle.php" method="post" enctype="multipart/form-data">
        请选择文件: <input type="file" name="file" />
        <input type="submit" value="上传" />
   </form>
</body>
</html>