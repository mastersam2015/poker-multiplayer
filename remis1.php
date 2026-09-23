<meta HTTP-EQUIV='refresh' CONTENT='3; URL=index.php'>
<?
$doda=$_GET["q"];
$myfile=fopen("bank1.txt", "r");

$tura = fread($myfile,filesize("bank1.txt"));
fclose($myfile);
//echo $tura;
//echo "<script>$('#bankm').html(".$tura.");</script>";

$x=$tura+$doda;

$fp = fopen("bank1.txt", "w");
fputs($fp, $x);
fclose($fp);
?>