<?php

$name = "chika";

if ($name = "chika"){
    echo '私の名前はちかです';
}else{
    echo 'あなたの名前ではありません';
}
?>

<?php

$total = 0;

for ($i = 0;$i <= 10000; $i++)
{
    $total += $i;
}

echo $total;

?>

<?php

$fruits = array("paineapple","mandarinorange","persimmon","watermelon","banana");

foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

?>

<?php
/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;
$start =1;
for($i = $start; $i <= $end; $i++){if($i % 5 == 0){echo $i;echo "\n";}}
?>