<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width">
<script src="jquery.js"></script>
</head>
<body>
<style>

img{position:absolute;}
td {width:80;height:150;}
</style>
<span id="load">loading...</span>
<script>

var talia = new Array();
var w=1;
var taliap="";
var tpom=0;
var tlicz=0;
var pompull;
var blok1=0;
var blok2=0;
var blok3=0;
var blok4=0;
var blok5=0;
var kom="";
var pomstul=0;
var set=0;
var nazwa1="";
var clickfix1=1;
var clickfix2=1;
//---------

var setp1=0;
var nazwap1="";

var setp2=0;
var nazwap2="";
var fix=0;

var request = new XMLHttpRequest();
	var kartyp1;
		var kartyp2 = new Array();
		
		
		function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
	var request2 = new XMLHttpRequest();	
		
function zapiszstul(x){//--------------------------------sety------------------------------
			var jeden;
			var dwa;
			var trzy;
			var cztery;
			var piec;
			
		var karta1;
		var karta2;
		var karta3;
		var karta4;
		var karta5;
		var sets;
		var set;
		var dziesiec=0;
		var dziewiec=0;
		var jopek=0;
		var dama=0;
		var krol=0;
		var as=0;
		var i;
	
		
		set=0;
		nazwa1="nothing";


if(x==3){
	
				kartyp1=$("#stul1").val()+","+$("#stul2").val()+","+$("#stul3").val()+","+$("#stul4").val()+","+$("#stul5").val()+",";
			
			
			
			$.get("kartyp2.php", { karty : kartyp1 },  function(data) {

});
	
	
}


if(x==1){
			jeden=$("#stul1").val();
			dwa=$("#stul2").val();
			trzy=$("#stul3").val();
			cztery=$("#stul4").val();
			piec=$("#stul5").val();
			

			
			}
			
			
			if(x==2){
				
				
				
					 	request2.open('GET', 'kartyp1b.txt', false);  // `false` => synchronous request
request2.send(null);


 
	  kartyp2=request2.responseText.split(",");
	  

/*
 jQuery.ajax({
        url: "kartyp1b.txt",
        type: "GET",
        contentType: 'application/json; charset=utf-8',
		cache: false,
        success: function(resultData) {
           //end2=resultData;
	  
	kartyp2=resultData.split(",");
        },
        error : function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout') {
                //console.log("Timeout occured while getting data from the server.  Trying again.");
                // If a timeout happens, DON'T STOP. Just keep going forever.
                $.ajax(this);
                return;
            }
         },
         timeout: 0,
    });	
 
// sleep(500);

				
						$.get("kartyp1b.txt", {  },  function(data) {
						kartyp2=data.split(",");

});	
*/			
			jeden=kartyp2[0];
			dwa=kartyp2[1];
			trzy=kartyp2[2];
			cztery=kartyp2[3];
			piec=kartyp2[4];
			
			
			karta("e1",kartyp2[0]);
karta("e2",kartyp2[1]);
karta("e3",kartyp2[2]);
karta("e4",kartyp2[3]);
karta("e5",kartyp2[4]);
			console.log(kartyp2);
			}
			
			/*
			kjeden=$("#p1k").val();
			kdwa=$("#p2k").val();
			ktrz=$("#p3k").val();
			kcztery=$("#p4k").val();
			kpiec=$("#p5k").val();
			*/
			//as
//as
			if(jeden=="1"){karta1="a";}
			if(jeden=="7"){karta1="a";}
			if(jeden=="13"){karta1="a";}
			if(jeden=="19"){karta1="a";}
			
			if(dwa=="1"){karta2="a";}
			if(dwa=="7"){karta2="a";}
			if(dwa=="13"){karta2="a";}
			if(dwa=="19"){karta2="a";}
			
			if(trzy=="1"){karta3="a";}
			if(trzy=="7"){karta3="a";}
			if(trzy=="13"){karta3="a";}
			if(trzy=="19"){karta3="a";}
			
			if(cztery=="1"){karta4="a";}
			if(cztery=="7"){karta4="a";}
			if(cztery=="13"){karta4="a";}
			if(cztery=="19"){karta4="a";}
			
			
			if(piec=="1"){karta5="a";}
			if(piec=="7"){karta5="a";}
			if(piec=="13"){karta5="a";}
			if(piec=="19"){karta5="a";}
			
			//dziewiec
			
			if(jeden=="2"){karta1="9";}
			if(jeden=="8"){karta1="9";}
			if(jeden=="14"){karta1="9";}
			if(jeden=="20"){karta1="9";}
			
			if(dwa=="2"){karta2="9";}
			if(dwa=="8"){karta2="9";}
			if(dwa=="14"){karta2="9";}
			if(dwa=="20"){karta2="9";}
			
			if(trzy=="2"){karta3="9";}
			if(trzy=="8"){karta3="9";}
			if(trzy=="14"){karta3="9";}
			if(trzy=="20"){karta3="9";}
			
			if(cztery=="2"){karta4="9";}
			if(cztery=="8"){karta4="9";}
			if(cztery=="14"){karta4="9";}
			if(cztery=="20"){karta4="9";}
			
			
			if(piec=="2"){karta5="9";}
			if(piec=="8"){karta5="9";}
			if(piec=="14"){karta5="9";}
			if(piec=="20"){karta5="9";}
			
			//dziesiec
			
			
			if(jeden=="3"){karta1="0";}
			if(jeden=="9"){karta1="0";}
			if(jeden=="15"){karta1="0";}
			if(jeden=="21"){karta1="0";}
			
			if(dwa=="3"){karta2="0";}
			if(dwa=="9"){karta2="0";}
			if(dwa=="15"){karta2="0";}
			if(dwa=="21"){karta2="0";}
			
			if(trzy=="3"){karta3="0";}
			if(trzy=="9"){karta3="0";}
			if(trzy=="15"){karta3="0";}
			if(trzy=="21"){karta3="0";}
			
			if(cztery=="3"){karta4="0";}
			if(cztery=="9"){karta4="0";}
			if(cztery=="15"){karta4="0";}
			if(cztery=="21"){karta4="0";}
			
			
			if(piec=="3"){karta5="0";}
			if(piec=="9"){karta5="0";}
			if(piec=="15"){karta5="0";}
			if(piec=="21"){karta5="0";}
			
			//jopekczerwo
			
			if(jeden=="4"){karta1="j";}
			if(jeden=="10"){karta1="j";}
			if(jeden=="16"){karta1="j";}
			if(jeden=="22"){karta1="j";}
			
			if(dwa=="4"){karta2="j";}
			if(dwa=="10"){karta2="j";}
			if(dwa=="16"){karta2="j";}
			if(dwa=="22"){karta2="j";}
			
			if(trzy=="4"){karta3="j";}
			if(trzy=="10"){karta3="j";}
			if(trzy=="16"){karta3="j";}
			if(trzy=="22"){karta3="j";}
			
			if(cztery=="4"){karta4="j";}
			if(cztery=="10"){karta4="j";}
			if(cztery=="16"){karta4="j";}
			if(cztery=="22"){karta4="j";}
			
			
			if(piec=="4"){karta5="j";}
			if(piec=="10"){karta5="j";}
			if(piec=="16"){karta5="j";}
			if(piec=="22"){karta5="j";}
			
			//dama


			if(jeden=="5"){karta1="d";}
			if(jeden=="11"){karta1="d";}
			if(jeden=="17"){karta1="d";}
			if(jeden=="23"){karta1="d";}
			
			if(dwa=="5"){karta2="d";}
			if(dwa=="11"){karta2="d";}
			if(dwa=="17"){karta2="d";}
			if(dwa=="23"){karta2="d";}
			
			if(trzy=="5"){karta3="d";}
			if(trzy=="11"){karta3="d";}
			if(trzy=="17"){karta3="d";}
			if(trzy=="23"){karta3="d";}
			
			if(cztery=="5"){karta4="d";}
			if(cztery=="11"){karta4="d";}
			if(cztery=="17"){karta4="d";}
			if(cztery=="23"){karta4="d";}
			
			
			if(piec=="5"){karta5="d";}
			if(piec=="11"){karta5="d";}
			if(piec=="17"){karta5="d";}
			if(piec=="23"){karta5="d";}			
			
			//krol
			
			
			if(jeden=="6"){karta1="k";}
			if(jeden=="12"){karta1="k";}
			if(jeden=="18"){karta1="k";}
			if(jeden=="24"){karta1="k";}
			
			if(dwa=="6"){karta2="k";}
			if(dwa=="12"){karta2="k";}
			if(dwa=="18"){karta2="k";}
			if(dwa=="24"){karta2="k";}
			
			if(trzy=="6"){karta3="k";}
			if(trzy=="12"){karta3="k";}
			if(trzy=="18"){karta3="k";}
			if(trzy=="24"){karta3="k";}
			
			if(cztery=="6"){karta4="k";}
			if(cztery=="12"){karta4="k";}
			if(cztery=="18"){karta4="k";}
			if(cztery=="24"){karta4="k";}


			
			
			if(piec=="6"){karta5="k";}
			if(piec=="12"){karta5="k";}
			if(piec=="18"){karta5="k";}
			if(piec=="24"){karta5="k";}
			//alert(jeden+"j");
			//alert(dwa+"d");
			//alert(trzy+"t");
			//alert(cztery+"tr");
			//alert(piec+"p");
			
			sets=karta1+karta2+karta3+karta4+karta5;
			for(i=0;i<6;i++){
			if(sets[i]=="a"){
			as=as+1;
			}
			if(sets[i]=="9"){
			dziewiec=dziewiec+1;
			}
			if(sets[i]=="0"){
			dziesiec=dziesiec+1;
			}
			if(sets[i]=="j"){
			jopek=jopek+1;
			}
			if(sets[i]=="d"){
			dama=dama+1;
			}
			if(sets[i]=="k"){
			krol=krol+1;
			}
			}
			//parka
			
			//alert(sets);
			/*
			alert(dziewiec+"9");
			alert(dziesiec+"10");
			alert(jopek+"j");
			alert(dama+"d");
			alert(krol+"k");
			alert(as+"as");
			*/
						if(dziewiec==2){set="1";nazwa1="pair";}
			if(dziesiec==2){set="2";nazwa1="pair";}
			if(jopek==2){set="3";nazwa1="pair";}
			if(dama==2){set="4";nazwa1="pair";}
			if(krol==2){set="5";nazwa1="pair";}
			if(as==2){set="6";nazwa1="pair";}
			
			
				//dwie parki

			if(dziewiec==2&&dziesiec==2){set="7";nazwa1="2 pairs";}
			if(dama==2&&dziewiec==2){set="9";nazwa1="2 pairs";}
			if(krol==2&&dziewiec==2){set="10";nazwa1="2 pairs";}
			if(jopek==2&&dziewiec==2){set="8";nazwa1="2 pairs";}
			if(as==2&&dziewiec==2){set="11";nazwa1="2 pairs";}
			if(dziesiec==2&&jopek==2){set="12";nazwa1="2 pairs";}
			if(dziesiec==2&&dama==2){set="13";nazwa1="2 pairs";}
			if(dziesiec==2&&krol==2){set="14";nazwa1="2 pairs";}
			if(dziesiec==2&&as==2){set="15";nazwa1="2 pairs";}
			if(jopek==2&&dama==2){set="16";nazwa1="2 pairs";}
			if(jopek==2&&krol==2){set="17";nazwa1="2 pairs";}
			if(jopek==2&&as==2){set="18";nazwa1="2 pairs";}
			if(dama==2&&krol==2){set="19";nazwa1="2 pairs";}
			if(dama==2&&as==2){set="20";nazwa1="2 pairs";}
			if(krol==2&&as==2){set="21";nazwa1="2 pairs";}
			
			
			//strit maly
			if(dziewiec==1&&dziesiec==1&&jopek==1&&dama==1&&krol==1){set="22";nazwa1="small straight";}
			
			
			
				//strit duzy
			
			if(dziesiec==1&&jopek==1&&dama==1&&krol==1&&as==1){set="23";nazwa1="big straight";}
			
			
				//trojka
			
			if(dziewiec==3){set="24";nazwa1="3oak";}
			if(dziesiec==3){set="25";nazwa1="3oak";}
			if(jopek==3){set="26";nazwa1="3oak";}
			if(dama==3){set="27";nazwa1="3oak";}
			if(krol==3){set="28";nazwa1="3oak";}
			if(as==3){set="29";nazwa1="3oak";}
			
					//full
			if((krol==3)&&(dama==2)){set="47";nazwa1="full house";}
			if((krol==2)&&(dama==3)){set="52";nazwa1="full house";}
			if((as==3)&&(krol==2)){set="60";nazwa1="full house";}
			if((as==2)&&(krol==3)){set="58";nazwa1="full house";}
			if((as==3)&&(dama==2)){set="48";nazwa1="full house";}
			if((dama==3)&&(as==2)){set="57";nazwa1="full house";}
			if((jopek==3)&&(as==2)){set="56";nazwa1="full house";}
			if((jopek==2)&&(as==3)){set="6";nazwa1="full house";}
			if((jopek==3)&&(krol==2)){set="51";nazwa1="full house";}
			if((krol==3)&&(jopek==2)){set="43";nazwa1="full house";}
			if((as==3)&&(jopek==2)){set="44";nazwa1="full house";}
			if((jopek==3)&&(dama==2)){set="47";nazwa1="full house";}
			if((dama==3)&&(jopek==2)){set="42";nazwa1="full house";}
			if((dziesiec==3)&&(as==2)){set="55";nazwa1="full house";}
			if((as==3)&&(dziesiec==2)){set="39";nazwa1="full house";}
			if((dziewiec==3)&&(as==2)){set="54";nazwa1="full house";}
			if((krol==3)&&(dziesiec==2)){set="38";nazwa1="full house";}
			if((dziesiec==3)&&(dama==2)){set="46";nazwa1="full house";}
			if((dama==3)&&(dziesiec==2)){set="37";nazwa1="full house";}
			if((dziesiec==3)&&(jopek==2)){set="41";nazwa1="full house";}
			if((jopek==3)&&(dziesiec==2)){set="36";nazwa1="full house";}
			if((krol==3)&&(dziewiec==2)){set="33";nazwa1="full house";}
			if((dziewiec==3)&&(krol==2)){set="49";nazwa1="full house";}
			if((dziesiec==3)&&(krol==2)){set="50";nazwa1="full house";}
			if((dziewiec==3)&&(dama==2)){set="45";nazwa1="full house";}
			if((dama==3)&&(dziewiec==2)){set="32";nazwa1="full house";}
			if((dziewiec==3)&&(jopek==2)){set="40";nazwa1="full house";}
			if((jopek==3)&&(dziewiec==2)){set="31";nazwa1="full house";}
			if((dziewiec==3)&&(dziesiec==2)){set="35";nazwa1="full house";}
			if((dziesiec==3)&&(dziewiec==2)){set="30";nazwa1="full house";}
			if((as==3)&&(dziewiec==2)){set="34";nazwa1="full house";}
			
			//kareta----------
			
			if(krol==4){set="65";nazwa1="four of a kind";}
			if(dama==4){set="64";nazwa1="four of a kind";}
			if(jopek==4){set="63";nazwa1="four of a kind";}
			if(dziesiec==4){set="62";nazwa1="four of a kind";}
			if(dziewiec==4){set="61";nazwa1="four of a kind";}
			if(as==4){set="66";nazwa1="four of a kind";}
			
	//poker maly
			if((jeden==2 || dwa==2 || trzy==2 || cztery==2 || piec==2)&&(jeden==3 || dwa==3 || trzy==3 || cztery==3 || piec==3)&&(jeden==4 || dwa==4 || trzy==4 || cztery==4 || piec==4)&&(jeden==5 || dwa==5 || trzy==5 || cztery==5 || piec==5)&&(jeden==6 || dwa==6 || trzy==6 || cztery==6 || piec==6)){set="67";nazwa1="poker";}
			
			
		   if((jeden==8 || dwa==8 || trzy==8 || cztery==8 || piec==8)&&(jeden==9 || dwa==9 || trzy==9 || cztery==9 || piec==9)&&(jeden==10 || dwa==10 || trzy==10 || cztery==10 || piec==10)&&(jeden==11 || dwa==11 || trzy==11 || cztery==11 || piec==11)&&(jeden==12 || dwa==12 || trzy==12 || cztery==12 || piec==12)){set="68";nazwa1="poker";}
						
						
						
			if((jeden==14 || dwa==14 || trzy==14 || cztery==14 || piec==14)&&(jeden==15 || dwa==15 || trzy==15 || cztery==15 || piec==15)&&(jeden==16 || dwa==16 || trzy==16 || cztery==16 || piec==16)&&(jeden==17 || dwa==17 || trzy==17 || cztery==17 || piec==17)&&(jeden==18 || dwa==18 || trzy==18 || cztery==18 || piec==18)){set="69";nazwa1="poker";}
			
			
			if((jeden==20 || dwa==20 || trzy==20 || cztery==20 || piec==20)&&(jeden==21 || dwa==21 || trzy==21 || cztery==21 || piec==21)&&(jeden==22 || dwa==22 || trzy==22 || cztery==22 || piec==22)&&(jeden==23 || dwa==23 || trzy==23 || cztery==23 || piec==5)&&(jeden==24 || dwa==24 || trzy==24 || cztery==24 || piec==24)){set="70";nazwa1="poker";}
			
			//poker duzy
			
			
			
			
						if((jeden==1 || dwa==1 || trzy==1 || cztery==1 || piec==1)&&(jeden==3 || dwa==3 || trzy==3 || cztery==3 || piec==3)&&(jeden==4 || dwa==4 || trzy==4 || cztery==4 || piec==4)&&(jeden==5 || dwa==5 || trzy==5 || cztery==5 || piec==5)&&(jeden==6 || dwa==6 || trzy==6 || cztery==6 || piec==6)){set="71";nazwa1="poker";}
			
			
		   if((jeden==7 || dwa==7 || trzy==7 || cztery==7 || piec==7)&&(jeden==9 || dwa==9 || trzy==9 || cztery==9 || piec==9)&&(jeden==10 || dwa==10 || trzy==10 || cztery==10 || piec==10)&&(jeden==11 || dwa==11 || trzy==11 || cztery==11 || piec==11)&&(jeden==12 || dwa==12 || trzy==12 || cztery==12 || piec==12)){set="72";nazwa1="poker";}
						
						
						
			if((jeden==13 || dwa==13 || trzy==13 || cztery==13 || piec==13)&&(jeden==15 || dwa==15 || trzy==15 || cztery==15 || piec==15)&&(jeden==16 || dwa==16 || trzy==16 || cztery==16 || piec==16)&&(jeden==17 || dwa==17 || trzy==17 || cztery==17 || piec==17)&&(jeden==18 || dwa==18 || trzy==18 || cztery==18 || piec==18)){set="73";nazwa1="poker";}
			
			
			if((jeden==19 || dwa==19 || trzy==19 || cztery==19 || piec==19)&&(jeden==21 || dwa==21 || trzy==21 || cztery==21 || piec==21)&&(jeden==22 || dwa==22 || trzy==22 || cztery==22 || piec==22)&&(jeden==23 || dwa==23 || trzy==23 || cztery==23 || piec==5)&&(jeden==24 || dwa==24 || trzy==24 || cztery==24 || piec==24)){set="74";nazwa1="poker";}
			
			
			
			
		//player1=set;
			
		//alert(set+"player 1");
			
			//alert(sets+"set");
			
		
		
			if(x==1){
			if (set === "") {
			set=0;
			}
			nazwap1=nazwa1;
			setp1=set;
			}
			
				if(x==2){
			if (set === "") {
			set=0;
			}
			nazwap2=nazwa1;
			setp2=set;
			}
			
			
			
			
			







}



function taliar(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}




function losuj(){
/*
while(w==1){
tpom=taliar(1, 24);
if(taliap.indexOf(tpom) != -1){

}else{
tlicz=tlicz+1;
taliap=taliap+""+tpom+",";
if(tlicz>=16){
w=2;
}
}

}
*/
<?
	$myfile=fopen("talia.txt", "r");
$number = fread($myfile,filesize("talia.txt"));
fclose($myfile);


$myfile=fopen("tura.txt", "r");

$tura = fread($myfile,filesize("tura.txt"));
fclose($myfile);

if($tura==1){
	
		$fp = fopen("tura.txt", "w");

	
fputs($fp, "2");
fclose($fp);
	$hazard=1;
}


if($tura==2){
	
		$fp = fopen("tura.txt", "w");

	
fputs($fp, "1");
fclose($fp);
	
}

if(empty($tura)){
	
		$fp = fopen("tura.txt", "w");

	
fputs($fp, "1");
fclose($fp);
	
}
?>
taliap="<? echo $number; ?>";

}



//var talia = new Array();


function pullt(){

//talia=taliap.split(",");

sleep(500);

request.open('GET', 'talia.txt', false);  // `false` => synchronous request
request.send(null);

if (request.status === 200) {
  talia=request.responseText.split(",");
}


/*
$.get("talia.txt", {  },  function(data) {
talia=data.split(",");
});
*/

taliap="";

pompull=talia[talia.length - 2];


for(var i=0;i<=talia.length - 3;i++){

taliap=taliap+""+talia[i]+",";

}


console.log(taliap);

sleep(500);



$.get("talia.php", { karty : taliap },  function(data) {

});



return pompull;
}

losuj();
//alert(taliap);

function karta(ob,num){

if (num==1){
$("#"+ob).attr('src', 'aswino.jpg');
}

if (num==2){
$("#"+ob).attr('src', 'dziewiecwino.jpg');
}
if (num==3){
$("#"+ob).attr('src', 'dziesiecwino.jpg');
}
if (num==4){
$("#"+ob).attr('src', 'jopekwino.jpg');
}
if (num==5){
$("#"+ob).attr('src', 'damawino.jpg');
}
if (num==6){
$("#"+ob).attr('src', 'krolwino.jpg');
}
if (num==7){
$("#"+ob).attr('src', 'asrzaledz.jpg');
}
if (num==8){
$("#"+ob).attr('src', 'dziewiecrzaledz.jpg');
}
if (num==9){
$("#"+ob).attr('src', 'dziesiecrzaledz.jpg');
}
if (num==10){
$("#"+ob).attr('src', 'jopekrzaledz.jpg');
}
if (num==11){
$("#"+ob).attr('src', 'damarzaledz.jpg');
}
if (num==12){
$("#"+ob).attr('src', 'krolrzaledz.jpg');
}
if (num==13){
$("#"+ob).attr('src', 'asdzwon.jpg');
}
if (num==14){
$("#"+ob).attr('src', 'dziewiecdzwon.jpg');
}
if (num==15){
$("#"+ob).attr('src', 'dziesiecdzwon.jpg');
}
if (num==16){
$("#"+ob).attr('src', 'jopekdzwon.jpg');
}
if (num==17){
$("#"+ob).attr('src', 'damadzwon.jpg');
}
if (num==18){
$("#"+ob).attr('src', 'kroldzwon.jpg');
}
if (num==19){
$("#"+ob).attr('src', 'asczerwo.jpg');
}
if (num==20){
$("#"+ob).attr('src', 'dziewiecczerwo.jpg');
}
if (num==21){
$("#"+ob).attr('src', 'dziesiecczerwo.jpg');
}
if (num==22){
$("#"+ob).attr('src', 'jopekczerwo.jpg');
}
if (num==23){
$("#"+ob).attr('src', 'damaczerwo.jpg');
}
if (num==24){
$("#"+ob).attr('src', 'krolczerwo.jpg');
}



}








var klik=6;
var mozna1;
var mozna2;
function dobij(){
	//alert($("#pula2").html());
	$.get("bank2.php", { kasa : parseInt($("#pula2").html()) },  function(data) {

});
	
		$.get("mozna2.php", { mozna : parseInt($("#pula2").html()) },  function(data) {

});


	
}
function koncz(){
	
		$.get("end2.php", { koncz : "1" },  function(data) {

});
	
}
var pokaz=1;
var pozwolenie=1;

function fixload(){
	
	
	
	if (pozwolenie==2){
		pokaz++;
	
	
	if(pokaz==2){
	zapiszstul(3);
	}
	
		if(pokaz==6){
	zapiszstul(1);zapiszstul(2);
	}
	
	
	
		if(pokaz==8){
	
	
	
	
	
	
	if(parseInt(setp1) > parseInt(setp2)){



$("#wyniki").html(nazwap1+" vs "+nazwap2+" win");




}else {
if(setp1==setp2){


$("#wyniki").html(nazwap1+" vs "+nazwap2+" remis");
}else{

$("#wyniki").html(nazwap1+" vs "+nazwap2+" lose");

}
}	
	
}
if(pokaz==10){	


	
	if(parseInt(setp1) > parseInt(setp2)){



//$("#wyniki").html(nazwap1+" vs "+nazwap2+" win");

window.location.href = 'win2.php?q='+$('#pula2').html();


}else {
if(setp1==setp2){

window.location.href = 'remis2.php?q='+$('#pula2').html();
//$("#wyniki").html(nazwap1+" vs "+nazwap2+" remis");
}else{

//$("#wyniki").html(nazwap1+" vs "+nazwap2+" lose");
window.location.href = 'lose2.php';
}
}

}	
	
	}
}
setInterval(fixload, 500);


function koniec(){
	
	
	

	pozwolenie=2;
	
	

}
var bankm;
var bankm2;
var end1=0;
var end2=0;
function klikx(){
	
		if(parseInt($('#stawka').val())<=parseInt($('#bankm').html()) && parseInt($('#stawka').val())<=parseInt($('#bankm2').html()) ){
		
			
			
$.get("bank2.php", { kasa : $('#stawka').val() },  function(data) {

});

klik=7;


$.get("mozna2.php", { mozna : $('#stawka').val() },  function(data) {

});
		$('#stawka').hide();
		$('#pl').hide();
		
		
		
		
	}
	
}


function pass(){
	
	
				$.get("pass.php", { q : 1 },  function(data) {

});
	
	
	
}
var x;
</script>


<center>
<table border="0"><tr><td>
<img src="talia.jpg" width="80" id="e1"></td><td>
<img src="talia.jpg" width="80" id="e2"></td><td>
<img src="talia.jpg" width="80" id="e3"></td><td>
<img src="talia.jpg" width="80" id="e4"></td><td>
<img src="talia.jpg" width="80" id="e5"></td><td>



</td></tr><tr><td>

<img src="talia.jpg" width="80" id="k1" onclick="$('#k1').css('margin-top','-20');if(blok1==0){pomstul=pullt();
$('#stul1').val(pomstul);karta('k1',pomstul);blok1=1;}"></td><td>
<img src="talia.jpg" width="80" id="k2" onclick="$('#k2').css('margin-top','-20');if(blok2==0){pomstul=pullt();
$('#stul2').val(pomstul);karta('k2',pomstul);blok2=2;}"></td><td>
<img src="talia.jpg" width="80" id="k3" onclick="$('#k3').css('margin-top','-20');if(blok3==0){pomstul=pullt();
$('#stul3').val(pomstul);karta('k3',pomstul);blok3=3;}"></td><td>

<img src="talia.jpg" width="80" id="k4" onclick="$('#k4').css('margin-top','-20');if(blok4==0){pomstul=pullt();
$('#stul4').val(pomstul);karta('k4',pomstul);blok4=4;}"


></td><td>
<img src="talia.jpg" width="80" id="k5"onclick="$('#k5').css('margin-top','-20');if(blok5==0){pomstul=pullt();
$('#stul5').val(pomstul);karta('k5',pomstul);blok5=5;}"></td><td>
</td></tr></table>
<br><br><br><br><br><br>

<?
if ($hazard==1){
	
	echo '
	<select id="stawka" >
	<option value="50" >0</option>
  <option value="50" >50</option>
  <option value="100" >100</option>
  <option value="150" >150</option>
  <option value="200" >200</option>
  <option value="250" >250</option>
  <option value="300" >300</option>
  <option value="350" >350</option>
  <option value="400" >400</option>
  <option value="450" >450</option>
  <option value="500" >500</option>
</select>
<input type="button" id="pl" value="plac" onclick="klikx();">
';
	
}


?>
<br>
<?
if ($hazard!=1){ echo '<input type="button" value="dobij" onclick="dobij();" >';}

?>
<br>



<input type="hidden" id="stul1">
<input type="hidden" id="stul2">
<input type="hidden" id="stul3">
<input type="hidden" id="stul4">
<input type="hidden" id="stul5">


<input type="hidden" id="estul1">
<input type="hidden" id="estul2">
<input type="hidden" id="estul3">
<input type="hidden" id="estul4">
<input type="hidden" id="estul5">
<br>

<span id="wyniki"></span>


<br>
<div id="menu"></div>
<br>
koncz <input type="button" value="end" onclick="koncz();"><input type="text" value="" id="koncz1"  style="width:60px;"><input type="text" value="" id="koncz2"  style="width:60px;">
<br>
<input type="button" value="pass" onclick="pass();"><br>

<span id="wyniki">tu</span>


<script>
pomstul=pullt();
$("#stul1").val(pomstul);
karta("k1",pomstul);
pomstul=pullt();
$("#stul2").val(pomstul);
karta("k2",pomstul);
pomstul=pullt();
$("#stul3").val(pomstul);
karta("k3",pomstul);
pomstul=pullt();
$("#stul4").val(pomstul);
karta("k4",pomstul);
pomstul=pullt();
$("#stul5").val(pomstul);
karta("k5",pomstul);

/*
pomstul=pullt();
$("#estul1").val(pomstul);

pomstul=pullt();
$("#estul2").val(pomstul);

pomstul=pullt();
$("#estul3").val(pomstul);

pomstul=pullt();
$("#estul4").val(pomstul);

pomstul=pullt();
$("#estul5").val(pomstul);
*/

function reflesh(){
	

/*
		
	 
$.get("end1.txt", {  },  function(data) {
			
			end1=data;
	  
	if(end1==1){
	  $('#koncz1').val('end');
	}

});


 
	  
 
 $.get("end2.txt", {  },  function(data) {
			
			end2=data;
	  
	if(end2==1){
	  $('#koncz2').val('end');
	}

});

*/

jQuery.ajax({
        url: "end1.txt",
        type: "GET",
        contentType: 'application/json; charset=utf-8',
		cache: false,
        success: function(resultData) {
           end1=resultData;
	  
	if(end1==1){
	  $('#koncz1').val('end');
	}
        },
        error : function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout') {
                //console.log("Timeout occured while getting data from the server.  Trying again.");
                // If a timeout happens, DON'T STOP. Just keep going forever.
                $.ajax(this);
                return;
            }
         },
         timeout: 0,
    });	  
 
 
 
 jQuery.ajax({
        url: "end2.txt",
        type: "GET",
        contentType: 'application/json; charset=utf-8',
		cache: false,
        success: function(resultData) {
           end2=resultData;
	  
	if(end2==1){
	  $('#koncz2').val('end');
	}
        },
        error : function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout') {
                //console.log("Timeout occured while getting data from the server.  Trying again.");
                // If a timeout happens, DON'T STOP. Just keep going forever.
                $.ajax(this);
                return;
            }
         },
         timeout: 0,
    });	  
	  
 
 
	  jQuery.ajax({
        url: "pass.txt",
        type: "GET",
        contentType: 'application/json; charset=utf-8',
		cache: false,
        success: function(resultData) {
           if(resultData==1){
			   
			   window.location.href = 'pass2.php?q='+$('#pula1').html();
			   
		   }
	  
	
        },
        error : function(xhr, textStatus, errorThrown) {
            if (textStatus == 'timeout') {
                //console.log("Timeout occured while getting data from the server.  Trying again.");
                // If a timeout happens, DON'T STOP. Just keep going forever.
                $.ajax(this);
                return;
            }
         },
         timeout: 0,
    });	 
	
	 
	if (end1==1 && end2==1){

koniec();

	}	


	$.get("menu2.php", {  },  function(data) {

$("#menu").html(data);	


});





	
}


setInterval(reflesh, 1000);

$( document ).ready(function() {
  $('#koncz1').val('');
$('#koncz2').val('');  
$('#load').hide();
});



</script>