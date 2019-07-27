<?php
$data = array(['a', 'c', 'b', 'e' ,'d']);
$data2 = array (['g', 'e', 'f']);
array_multisort($data);
array_multisort($data2);
print_r($data2);
print_r($data);


$datalain = array(['g', 'h', 'i','j'],['a','b','c','b','e','d']);
$datalain2 = array(['e', 'f', 'g']);
asort($datalain);
print_r($datalain2);
asort($datalain2);
print_r($datalain);


?>