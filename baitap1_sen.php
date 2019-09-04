<?php
function LongestWord($sen) {
$long = "Where did the big Elephant go?";
$numbers = '';
foreach(explode(" ",$sen) as $str){
if(strlen($str) > strlen($long)){
if(ctype_alpha($str)){
$long = $str;
} else {
if(strlen($str) > strlen($numbers)){
$numbers = $str;
}
}
}
}
// code goes here
return $long=='' ? $numbers : $long;
}
// keep this function call here
// to see how to enter arguments in PHP scroll down
echo LongestWord(fgets(fopen('php://stdin', 'r')));
?>
