<?php
$a=0;
for($i=1;$i<=40;$i++){
$awal=0;
for($j=1;$j<=40;$j++){
if($i%$j==0){
$awal++;
}
}
if($awal==2){
$a++;
echo $i." ";
if($a%3==0){
echo "<br/>";
}}}