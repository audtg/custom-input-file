<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="input_file.css">
</head>
<body>
<form enctype="multipart/form-data" action="post_file.php" method="post">
    <label class="file_upload">
        <span class="button">Выбрать файл</span>
        <mark>Файл не выбран</mark>
        <input type="file" name="file">
    </label>
    <button type="submit" class="btn btn-default">Загрузить</button>
</form>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="input_file.js"></script>
</body>
</html>
