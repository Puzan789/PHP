<?php 
$foods=array("Apple", "Orange", "banana", "cocojnuts");
array_push($foods,"help");
for($i=0;$i<count($foods);$i++){
echo $foods[$i]."<br>";
}
array_pop($foods);
$reversed=array_reverse($foods);
print($reversed[0]);
?>