<?php //php 7.0.8
function check($txt1,$txt2){
    echo "\n";
    if(strpos($txt1,$txt2)!==false)
        echo $txt1."-contains string-".$txt2;
    else
        echo $txt1."-String not contained-".$txt2;
}
$str1="I AM NOOB!";
$str2="my friend";
$str3="hello";
echo "String 1 : ".$str1."\n";
echo "String 2 : ".$str2."\n";
echo "String 3 : ".$str3."\n";
check($str1,$str2);
check($str1,$str3);
?>
