<?php //php 7.0.8
$str="COVID kab khatam hoga !!!!.";
echo "String before Edit : ".$str."\n After Edit : ";
echo preg_replace('/the/','That',$str,1);
?>
