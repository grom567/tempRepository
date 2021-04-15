<?php

$str = file_get_contents("chart.json");

$arr = json_decode($str);

foreach($arr as $key => $value ){
    $k = 0;
    $replace = false;
    for( $i = 1; $i < count($value); $i++){
        if(count($value) >= 5){
            if($value[$i] == 100){
                $k++;
            }
            if($i == 4 && $k == 4){
                $replace = true;    
            }
        }
    }
    for( $i = 1; $i < count($value); $i++){
        if($replace && $value[$i] == 100){
            $value[$i] = null;
        }else{
            break;
        }
    }
    if($replace){
        $arr[$key] = $value;
    }
}

$strResult = json_encode($arr);

file_put_contents("chart_result.json", $strResult);

?>