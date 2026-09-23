<?
$x=$_GET["mozna"];



$fp = fopen("mozna1.txt", "w");
fputs($fp, $x);
fclose($fp);


?>