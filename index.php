<!doctype html>
<html>
<head>
</head>
<body>
<p>Hello!</p>
<?php

define("DEFAULT_TEMPLATE_PATH", '/local/templates/.default');

function debug($data){
    echo '<pre>'.print_r($data,true).'</pre>';
}

function cut($string, $length){
$string = mb_substr($string, 0, $length,'UTF-8'); // обрезаем и работаем со всеми кодировками и указываем исходную кодировку
$position = mb_strrpos($string, ' ', 'UTF-8'); // определение позиции последнего пробела. Именно по нему и разделяем слова
$string = mb_substr($string, 0, $position, 'UTF-8'); // Обрезаем переменную по позиции
return $string.' ...';
}

function resImg($img,$width,$height){
    $file = CFile::ResizeImageGet($img, array('width'=>$width, 'height'=>$height), BX_RESIZE_IMAGE_EXACT , true);
    return $file;
}
?>
</body>
</html>