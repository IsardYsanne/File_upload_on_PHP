<?php
/* echo $_FILES['filename']['size'] . '<br>'; //размер файла в байтах
echo $_FILES['filename']['name'] . '<br>'; //имя файла
echo $_FILES['filename']['tmp_name'] . '<br>'; //путь и временное имя файла, сохраненного на сервере
echo $_FILES['filename']['type'] . '<br>'; //тип файла */

if(move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/' . $_FILES['filename']['name'])){
    if($_FILES['filename']['size'] > 2*1012*1024){
        exit(); //завершаем скрипт
    } else{
        echo 'Файл успешно отправлен на сервер'  . '<br>';
        echo $_FILES['filename']['size'] . '<br>';
        echo $_FILES['filename']['name'] . '<br>';
        echo $_FILES['filename']['type'] . '<br>';
        echo $_FILES['filename']['tmp_name'] . '<br>';
    }
} else {
    echo 'файл НЕ отправлен на сервер, его размер превышает 2 МБ';
}