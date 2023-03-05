<?php

$year = $_POST['year'];
$age = 2023 - $year;
function isPrime($age)
{
 for($i=2; $i<$age; $i++)
   {
      if($age %$i ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }
   function isEven($n){
    if($n % 2 ==0 )
        {
            return 0;
        }
        return 1;
   }
$prime = isPrime($age);
$even = isEven($age);
if ($prime == 1 && $even == 0){
  $response["Age"]="prime and even" ;
  echo json_encode($response);
}

else{
  $response["Age"]="not prime or not even" ;
  echo json_encode($response);
}

?>