<?
$x=$_GET["koncz"];



$fp = fopen("end1.txt", "w");
fputs($fp, $x);
fclose($fp);


?>