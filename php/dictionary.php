<?php
$grades = array('a'=>10, 'b'=>2, 'c'=>6);
// array_push($grades, "'d'=>1");
$grades['d'] = 1;
foreach($grades as $k=>$v){
    echo "key : {$k} / value : {$v}<br>";
}

?>