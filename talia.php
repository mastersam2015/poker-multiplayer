
<?
$x=$_GET["karty"];

$fp = fopen("talia.txt", "w");
fputs($fp, $x);
fclose($fp);


?>

