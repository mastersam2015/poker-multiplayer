<meta HTTP-EQUIV='refresh' CONTENT='12; URL=index2.php'>
loading...
<?
$doda=$_GET["q"];
$myfile=fopen("bank2.txt", "r");

$tura = fread($myfile,filesize("bank2.txt"));
fclose($myfile);
//echo $tura;
//echo "<script>$('#bankm').html(".$tura.");</script>";

$x=$tura+$doda+$doda;

$fp = fopen("bank2.txt", "w");
fputs($fp, $x);
fclose($fp);
?>