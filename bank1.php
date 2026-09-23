<?
$x=$_GET["kasa"];

	$myfile=fopen("bank1.txt", "r");
$number = fread($myfile,filesize("bank1.txt"));
fclose($myfile);

$number=$number-$x;

$fp = fopen("bank1.txt", "w");
fputs($fp, $number);
fclose($fp);


?>