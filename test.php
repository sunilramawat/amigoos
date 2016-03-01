<?php

$array = array("0"=>array("0"=>1,"id"=>"2"),"1"=>array("0"=>3,"id"=>1),"2"=>array("0"=>2,"id"=>2));



function sortById($x, $y) {
    return $x['id'] - $y['id'];
}

usort($array, 'sortById');
echo "<pre>"; print_r($array)



?>