<?
$x=$_GET["karty"];



$fp = fopen("kartyp1b.txt", "w");
fputs($fp, $x);
fclose($fp);


?>