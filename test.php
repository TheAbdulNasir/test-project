<?php
function find7Digit($n)
{
  $array = str_split($n);
  $length = count($array);
  for($v = 0; $v < $length; $v++){
    if($array[$v] == 7){
      return getsum($n);
    }
  }
 return 0;
}

function getsum($n)
{
  $k = $n;
  for($sum = 0; $k > 0; $sum += $k % 10, $k /= 10);
  
  if($sum == 10){
    return $n;
  }
  return 0;
}

function getPositiveIntegers()
{
  $integerArray = array();
  for ($x = 0; $x <= 13445345; $x++){
    $number = find7Digit($x);
    if($number != 0){
      array_push($integerArray, $number);
    }	  
    if(count($integerArray) == 10)
    {
      return print_r($integerArray);
    }
  }
}

echo (getPositiveIntegers());
?>
