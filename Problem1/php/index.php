<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$obj = $_POST['pattern'];

// ここに処理を記述してください。

$decode = json_decode($obj, true);
$arr  =$decode["obj"];

var_dump($arr);

$ans = "";
$first = true;

for($i = 1; $i < 31;$i++){
    $txt = "";
    $flag = false;

    for($j = 0; $j < count($arr); $j++){
        $num = $arr[$j]['num'];
        $str = $arr[$j]['text'];
        if($i % $num == 0){
            if($flag){
                $txt .= " ";
            }
            $txt .= $str;
            $flag = true;
        }
    }
    if($txt == ""){
        $txt = $i;
    }

    if($first){
        $ans = $txt; 
        $first = false;
    }else{
        $ans .= ", " . $txt; 
    }
}


echo($ans);
?>