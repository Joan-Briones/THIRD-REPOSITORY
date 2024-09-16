<?php

function myFunction ($param1, $param2, $param3){
    $array = array ('Name1'=> $param1, 'Name2' => $param2, 'Name3'=> $param3 );
foreach ($array as $index =>$j){
    echo 'index: '. ' '. $index. ' ' .'Name: '. $j. '<br>';
}
}

echo myFunction ('Glysicakes', 'Joanicakes', 'Joanqtipie');