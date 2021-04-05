<?php
$stdin = trim(fgets(STDIN));
$arr = explode(" ", $stdin);
$aq = $arr[0];
$goal = $arr[1];

$stdin = trim(fgets(STDIN));
$arr = explode(" ", $stdin);

$min = false;
$max = false;
for($i = 0; $i < $aq; $i++){
    if($arr[$i] < $goal){
        $min = true;
    }
    if($arr[$i] > $goal){
        $max = true;
    }
}

$txt = "No";
if($min and $max){
    $txt = "Yes";
}

echo($txt);
?>
