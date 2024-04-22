<?php

// $a="PHP";
// echo "Hello!".$a;
// echo "\n";
// echo 'next';

// $first=5;
// $second=4;
// $result=$first+$second;
// echo "\n";
// echo "Результат = $result";
// echo "\n";
// if($first===5)
// {
// echo "Это 5";
// }else{
//     echo "Это не 5";
//     die;
// }
// echo "\n";
// echo "Выполнилось!";
// echo "\n";
$array=[1,3,4,7];
$array=array(1,2,3,45,5);
echo $array[7];
foreach($array as $i ){
    if($i==3){
        continue;
    }
    echo "\n";
    echo $i;
    
}

try
{
echo 10/0;    
}
catch(\Throwable $ex)
{
 echo "Error!";
die();
}
