<?
$x=$_GET["koncz"];



$fp = fopen("end2.txt", "w");
fputs($fp, $x);
fclose($fp);


?>