<?php 

 $str= $_GET['string'];
 $arr = explode(",",$str);
 
$arr = explode(",",$str);
$len = count($arr);



function selection_sort($arr, $length) 
{
    for($i = 0; $i < $length ; $i++)
    {
        $low = $i;
        for($j = $i + 1; $j < $length ; $j++)
        {
            if ($arr[$j] < $arr[$low])
            {
                $low = $j;
            }
        }
     
        if ($arr[$i] > $arr[$low])
        {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$low];
            $arr[$low] = $tmp;
        }
    }
}


selection_sort($arr, $len);
$response['sortedList'] = $arr;
echo json_encode($response);
  ?>