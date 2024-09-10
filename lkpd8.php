<?php 
function getahli(){
    $data = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];
    $data_unique= array_unique(array_map('strtoupper', $data));
    return $data_unique;
}
$major = getahli();
print_r($major);
?>