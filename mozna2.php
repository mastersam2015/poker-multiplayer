<?
$x=$_GET["mozna"];



$fp = fopen("mozna2.txt", "w");
fputs($fp, $x);
fclose($fp);


?>