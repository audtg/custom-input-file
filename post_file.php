<?php
var_dump($_FILES);

$filename = __DIR__ . '/upload/'.basename($_FILES['file']['name']);
if (!move_uploaded_file($_FILES['file']['tmp_name'], $filename)) {
    echo "Проблема с загрузкой файла: ".$_FILES['csv']['tmp_name'];
} else {
    echo "Успешно загружен файл: ".$_FILES['file']['tmp_name'];
}
