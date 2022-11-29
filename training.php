<?php

 function twice($max){
    return $max*2;
 }

echo twice(8);
?>

<?php 

 function add($a,$b){
    return $a+$b;
 }
 echo add(4,5);
 ?>
     
<?php 

 function arr($arr){
    return$arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
 }
 
 echo arr(array(1,3,5,7,9));
 ?>
 
<?php
 
 //課題3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください

function kakeru($arr){
  $result = 1;
  foreach ($arr as $a){
    $result *= $a;
    //$result = $result * $a;
    // $result = 1 * 1;
    // $result = 1 * 3;
    // $result = 3 * 5;
    // $result = 15 * 7;
    // $result = 105 * 9;
  }
  return $result;
}
echo kakeru(array(1,3,5,7,9));
echo "\n";


    
    
?>
 
<?php
 //4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
$array = array(7,5,3,2,1,9);
function max_array($arr){
  //とりあえず配列の最初の要素を一番大きい値とする
  $max_number = $arr[0];
  foreach($arr as $a){
    //もし、maxnumberよりもaが大きかったら、maxnumberをaと同じ値にする
    if($max_number < $a){
        $max_number = $a;
        
    }
  }
    return $max_number;
}

echo "4番：";
echo max_array($array)."\n";
?>

<?php


$result = 'test<h1>clear<h1>';
    echo strip_tags ($result);
    
?>


<?php


$colour = array('red','blue','yellow');
    array_push($colour,'green','purple');
    print_r($colour);
    
?>


<?php

$trees1 = array('maple','cebar');
$trees2 = array('beech','fir');

$result = array_merge($trees1,$trees2);
    print_r($result);
?>

<?php


$time = mktime(10,10,10);
    var_dump(date('Y年m月d日h時i分s秒',$time));
    
    echo "\n";
    echo date('Y-m-d');
    

