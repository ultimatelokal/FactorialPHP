<?php
// Your code here!
// change the value of sum to 1 if you are taking the SUMMATION and if FACTORIAL change it to 0
// change the value of operator (+ for SUMMATION, * for FACTORIAL)

$array = [1,2,3,4,5,6];
 

$sum = 1;
foreach($array as $value){
  echo   ($sum += $value) ."<br>";
}
 
 echo "<br> TOTAL<br>". ($sum);
?>