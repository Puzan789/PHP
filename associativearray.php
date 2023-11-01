<?php
//associative array=An array made up ofkey=>value pairs
$capitals=array("usa"=>"wdc", "japan"=>"dfssdf", "fsdf"=>"dsfsd");
foreach($capitals as $mo=>$value) {
    print"<br>{$mo}={$value}<br>";
}
$capitals['usa']="lapos";
print$capitals['usa'];
$KYS=array_values($capitals);
foreach ($KYS as $keys){
    echo $keys."<br>";
}
?>