<br>
twoja pula: 
<span id="pula1"><?
$myfile=fopen("mozna2.txt", "r");

$tura = fread($myfile,filesize("mozna2.txt"));
fclose($myfile);
echo $tura;
?></span>

<br>
pula wroga: <span id="pula2"><?
$myfile=fopen("mozna1.txt", "r");

$tura = fread($myfile,filesize("mozna1.txt"));
fclose($myfile);
echo $tura;
?></span>
<br>
twoj bank: <span id="bankm" ><?
$myfile=fopen("bank2.txt", "r");

$tura = fread($myfile,filesize("bank2.txt"));
fclose($myfile);
echo $tura;
//echo "$('#bankm').html(".$tura;.");";
?></span>
<br>
bank wroga: <span id="bankm2" ><?
$myfile=fopen("bank1.txt", "r");

$tura = fread($myfile,filesize("bank1.txt"));
fclose($myfile);
echo $tura;
?></span>
<br>