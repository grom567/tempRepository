<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question-1</title>
</head>
<body>

<?php

$a = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius voluptas vero qui commodi culpa doloremque dolorum nisi molestiae, minus, ratione explicabo officia magni, praesentium hic nam saepe? Ex, vero soluta. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, dolorum dicta! Accusantium tempore nobis, maiores commodi nemo accusamus inventore rerum sint corrupti alias harum qui dolorum provident quidem rem ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, modi voluptate, debitis, maiores quo minus quam pariatur eius culpa velit eligendi nihil reprehenderit iusto. Molestiae consequatur nisi debitis ipsum libero.";

$b = mb_substr($a, 0, 179);

$b_arr = explode(" ", $b);
$arr_count = count($b_arr);
if ($a[180] != ' ') $arr_count--;

$link_str = implode(" ", array_slice($b_arr, $arr_count - 2));
$link = "<a href='index.php?text=full'>$link_str ...</a>";

$b = implode(" ", array_slice($b_arr, 0, $arr_count - 2)) . " " . $link;

echo ($_GET['text'] == 'full') ? $a : $b;

?>
    
</body>
</html>