<html>
<head>
    <meta charset="utf-8">
    <title>index_uploads</title>
</head>
<body>
    <form action="uploads.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file[]">
        <br>
        <input type="file" name="file[]">
        <br>
        <input type="submit" value="uploads">
    </form>
</body>
</html>