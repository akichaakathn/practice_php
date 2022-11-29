<?php

$name = "chik";

if ($name == "chika"){
    echo '私の名前はちかです';
} else{
    echo 'あなたの名前ではありません';
}
?>

<?php

$total = 0;

for ($i = 0;$i <= 10000; $i++){
    $total += $i;
}

echo $total;

?>

<?php

$fruits = array("paineapple","mandarinorange","persimmon","watermelon","banana");

foreach($fruits as $f){
    echo $f;
    echo "\n";
}

?>

<?php
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
$start =1;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
    
}
?>

<!--* 課題０６ */-->

<?php

 function twice($max){
     return $max*2;}

echo twice(8);
?>

<?php 

 function add($a,$b){
     return $a+$b;}
     
     echo add(4,5);
     ?>
     
<?php 

 function arr($arr){
     
     return$arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
 }
 
 echo arr(array(1,3,5,7,9));
 ?>
 
 <?php
 
 function max_array($arr){
     
  $max_number = $arr[0];
  foreach($arr as $a){
      {$arr =$a ;$a < count($arr);$a++;}
      return $arr;
      
    /