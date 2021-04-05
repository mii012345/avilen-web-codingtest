<?php

function check($arr)
{
    $count = array_count_values($arr);
    $max = max($count);
    if ($max == 1) {
        return false;
    } else {
        return true;
    }
}

$count = trim(fgets(STDIN));

for($i = 0; $i < $count; $i++){
    $stdin = trim(fgets(STDIN));
    $arr = explode(" ", $stdin);
    
    $c = 0;
    
    while(true){
        $original = $arr;
        array_multisort($original);
        if(($original[1] == $arr[0] or $original[1] == $arr[2]) and !check($arr)){
            var_dump($c);
            break;
        }
        if($arr[0] == $arr[2]){
            $arr[0]--;
        }else{
            $arr[1]--;
        }
        if($arr[0] == 0 or $arr[1]  == 0 or $arr[2] == 0){
            $c = -1;
            var_dump($c);
            break;
        }
        $c++;
    }   
}
?>
