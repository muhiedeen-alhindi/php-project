<?php

$string = $_GET['str'];
function reverseNumbersInString($str){
    $str = str_split($str);
    $i = 0;
    $j= count($str) - 1;
     
    while ($i < $j) {
        if (!preg_match( '/[0-9]/', $str[$i])) { 
            $i++; 
            continue;
        }
        if (!preg_match( '/[0-9]/', $str[$j])) { 
            $j--; 
            continue;
        }
        $tmp = $str[$i]; 
        $str[$i] = $str[$j];
        $str[$j] = $tmp;
        $i++;
        $j--;
    }
    
    return implode('', $str);
};
$response["Reversed Numbers"]=reverseNumbersInString($string) ;
echo json_encode($response);

?>