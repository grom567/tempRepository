<?php
// файл и новый размер
$filename = 'image.png';
$percent = 0.01;

// тип содержимого
header('Content-Type: image/png');

// получение нового размера
list($width, $height) = getimagesize($filename);
$newwidth = $width * $percent;
$newheight = $height * $percent;

// загрузка
$thumb = imagecreate($newwidth, $newheight);
$source = imagecreatefrompng($filename);

// изменение размера
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

$thumb = imagecrop($thumb, ['x' => 0, 'y' => 50, 'width' => 200, 'height' => 100]);

// вывод
imagepng($thumb);
?>