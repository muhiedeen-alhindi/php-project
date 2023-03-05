<?php 

$str=$_GET['string'];
function Palindrome($str) {
   $left = 0;
    $right = strlen($str) - 1;
    $palindrome = 0;
  
    while($left <  $right){
      if ($str[$left] != $str[ $right]){
        $palindrome = 1;
        break;
      }
      $left++;
      $j--;
    }
  
    if ($palindrome == 0){
      $response["status"]=" is Palindrome" ;
      echo json_encode($response);
    } else {
      $response["status"]="not Palindrome" ;
      echo json_encode($response);
    }
  }
  
  Palindrome($str);

 




 ?>