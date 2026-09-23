<?
$x=$_GET["kasa"];

	$myfile=fopen("bank2.txt", "r");
$number = fread($myfile,filesize("bank2.txt"));
fclose($myfile);

$number=$number-$x;

$fp = fopen("bank2.txt", "w");
fputs($fp, $number);
fclose($fp);


?>