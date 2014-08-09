<!DOCTYPE html>
<html>
<body>
<style type="text/css">
html, body { height: 100%; width: 100%; margin: 0; }
h2 {
	font-size: 24pt;
}
input[type="button"] {
    font-size:36pt;
}
#dossier {height: 30%; text-align: center; background: #808080}
#container {height: 70%; width: 100%; background: #000000; overflow: hidden;
float: left}
#stats {height: 100%; width: 100%; float: left; position: relative}
#speeddiv, #mightdiv, #sanitydiv, #knowledgediv {width: 25%; height: 100%; text-align: center; float: left; position: relative; overflow: hidden; font-size: 24pt;}
#speeddiv {background: #333333}
#mightdiv {background: #444444}
#sanitydiv {background: #333333}
#knowledgediv {background: #444444}

</style>

<!-- iPhone Stuff - 1st line disables zooming, 2nd line allows for fullscreen view (without browser widgets) -->
<meta name="viewport" content="width=device-width; initial-scale=0.5; maximum-scale=0.5; user-scalable=0;">
<meta name="apple-mobile-web-app-capable" content="yes">

<?php $character = $_GET["character"]; ?>

<div id="dossier">
</div>
 <div id="container">
  <div id="stats">
   <div id="speeddiv">
   </div>
   <div id="mightdiv">
   </div>
   <div id="sanitydiv">
   </div>
   <div id="knowledgediv">
   </div>
  </div>
</div>

<script type="text/javascript">

var character = "<?php echo $character ?>";

// spx, mtx, snx, knx: countdown used to display each subsequent value in an array starting with the highest

function speedcounter() {
 var spx;
 document.getElementById('speeddiv').innerHTML = "";
 document.getElementById('speeddiv').innerHTML += '<h2><span style="color:' + color + '">Speed</span></h2>';
 document.getElementById('speeddiv').innerHTML += '<input id="addspeed" type="button" onclick="changestat(this.id);" value="+"><br />';

 for (spx=8; spx>=0; spx--) {
    if (spx == speed) { 
        document.getElementById('speeddiv').innerHTML += '<span style="color:' + color + '">' + sp[spx] + '</span><br />';
    } else {
        document.getElementById('speeddiv').innerHTML += sp[spx] + "<br />"; 
    }  
 }
 document.getElementById('speeddiv').innerHTML += '<input id="remspeed" type="button" onclick="changestat(this.id);" value="-">';  
}

function mightcounter() {
 var mtx;
 document.getElementById('mightdiv').innerHTML = "";
 document.getElementById('mightdiv').innerHTML += '<h2><span style="color:' + color + '">Might</span></h2>';
 document.getElementById('mightdiv').innerHTML += '<input id="addmight" type="button" onclick="changestat(this.id);" value="+"><br />';

 for (mtx=8; mtx>=0; mtx--) {
    if (mtx == might) { 
        document.getElementById('mightdiv').innerHTML += '<span style="color:' + color + '">' + mt[mtx] + '</span><br />';
    } else {
        document.getElementById('mightdiv').innerHTML += mt[mtx] + "<br />"; 
    }  
 }
 document.getElementById('mightdiv').innerHTML += '<input id="remmight" type="button" onclick="changestat(this.id);" value="-">';  
}

function sanitycounter() {
 var snx;
 document.getElementById('sanitydiv').innerHTML = "";
 document.getElementById('sanitydiv').innerHTML += '<h2><span style="color:' + color + '">Sanity</span></h2>';
 document.getElementById('sanitydiv').innerHTML += '<input id="addsanity" type="button" onclick="changestat(this.id);" value="+"><br />';

 for (snx=8; snx>=0; snx--) {
    if (snx == sanity) { 
        document.getElementById('sanitydiv').innerHTML += '<span style="color:' + color + '">' + sn[snx] + '</span><br />';
    } else {
        document.getElementById('sanitydiv').innerHTML += sn[snx] + "<br />"; 
    }  
 }
 document.getElementById('sanitydiv').innerHTML += '<input id="remsanity" type="button" onclick="changestat(this.id);" value="-">';  
}

function knowledgecounter() {
 var knx;
 document.getElementById('knowledgediv').innerHTML = "";
 document.getElementById('knowledgediv').innerHTML += '<h2><span style="color:' + color + '">Knowledge</span></h2>';
 document.getElementById('knowledgediv').innerHTML += '<input id="addknowledge" type="button" onclick="changestat(this.id);" value="+"><br />';

 for (knx=8; knx>=0; knx--) {
    if (knx == knowledge) { 
        document.getElementById('knowledgediv').innerHTML += '<span style="color:' + color + '">' + kn[knx] + '</span><br />';
    } else {
        document.getElementById('knowledgediv').innerHTML += kn[knx] + "<br />"; 
    }  
 }
 document.getElementById('knowledgediv').innerHTML += '<input id="remknowledge" type="button" onclick="changestat(this.id);" value="-">';  
}

function changestat(stat) {
  
 switch (stat) {
 
  case "addspeed":
  
    if (speed < 8) {
     speed++;
     speedcounter();
    }
    break;
  
  case "addmight":
 
    if (might < 8) {
     might++;
     mightcounter();
    }
    break;
  
  case "addsanity":

    if (sanity < 8) {
     sanity++;
     sanitycounter();
    }
    break;
	
  case "addknowledge":
 
    if (knowledge < 8) {
     knowledge++;
     knowledgecounter();
    }
    break;
	
  case "remspeed":

    if (speed > 0) {
     speed--;
     speedcounter();
    }
    break;
	
  case "remmight":

    if (might > 0) {
     might--;
     mightcounter();
    }
    break;
	
  case "remsanity":
  
    if (sanity > 0) {
     sanity--;
     sanitycounter();
    }
	break;
 
  case "remknowledge":
  
    if (knowledge > 0) {
     knowledge--;
     knowledgecounter();
    }
    break;
 }
}
 
// sp, mt, sn, kn: arrays holding the unique character stats
// speed, might, sanity, knowledge: contain the current index/key value of the corresponding array

switch (character) {
   case "brandon":
  
    var sp=["0","3","4","4","4","5","6","7","8"];
    var mt=["0","2","3","3","4","5","6","6","7"];
    var sn=["0","3","3","3","4","5","6","7","8"];
    var kn=["0","1","3","3","5","5","6","6","7"];

    var speed=3;
    var might=4;
    var sanity=4;
    var knowledge=3;
	
	var color="#00FF00";
    
	break;

   case "flash":
  
    var sp=["0","4","4","4","5","6","7","7","8"];
    var mt=["0","2","3","3","4","5","6","6","7"];
    var sn=["0","1","2","3","4","5","5","5","7"];
    var kn=["0","2","3","3","4","5","5","5","7"];
  
    var speed=5;
    var might=3;
    var sanity=3;
    var knowledge=3;

	var color="#E10000";

    break;

   case "father":

    var sp=["0","2","3","3","4","5","6","7","7"];
    var mt=["0","1","2","2","4","4","5","5","7"];
    var sn=["0","3","4","5","5","6","7","7","8"];
    var kn=["0","1","3","3","4","5","6","6","8"];
  
    var speed=3;
    var might=3;
    var sanity=5;
    var knowledge=4;
	
	var color="#FFFFFF";

    break;

   case "heather":

    var sp=["0","3","3","4","5","6","6","7","8"];
    var mt=["0","3","3","3","4","5","6","7","8"];
    var sn=["0","3","3","3","4","5","6","6","6"];
    var kn=["0","2","3","3","4","5","6","7","8"];
  
    var speed=3;
    var might=3;
    var sanity=3;
    var knowledge=5;
	
	var color="#B232B2";
 
    break;

   case "jenny":

    var sp=["0","2","3","4","4","4","5","6","8"];
    var mt=["0","3","4","4","4","4","5","6","8"];
    var sn=["0","1","1","2","4","4","4","5","6"];
    var kn=["0","2","3","3","4","4","5","6","8"];
  
    var speed=4;
    var might=3;
    var sanity=5;
    var knowledge=3;
	
	var color="#B232B2";

   break;

   case "zostra":

    var sp=["0","2","3","3","5","5","6","6","7"];
    var mt=["0","2","3","3","4","5","5","5","6"];
    var sn=["0","4","4","4","5","6","7","8","8"];
    var kn=["0","1","3","4","4","4","5","6","6"];
  
    var speed=3;
    var might=4;
    var sanity=3;
    var knowledge=4;

	var color="#56CAFF";
	
    break;

   case "missy":

    var sp=["0","3","4","5","6","6","6","7","7"];
    var mt=["0","2","3","3","3","4","5","6","7"];
    var sn=["0","1","2","3","4","5","5","6","7"];
    var kn=["0","2","3","4","4","5","6","6","6"];
  
    var speed=3;
    var might=4;
    var sanity=3;
    var knowledge=4;

	var color="#FFA500";
	
    break;

   case "ox":

    var sp=["0","2","2","2","3","4","5","5","6"];
    var mt=["0","4","5","5","6","6","7","8","8"];
    var sn=["0","2","2","3","4","5","5","6","7"];
    var kn=["0","2","2","3","3","5","5","6","6"];
  
    var speed=5;
    var might=3;
    var sanity=3;
    var knowledge=3;
	
	var color="#E10000";

    break;

   case "peter":

    var sp=["0","3","3","3","4","6","6","7","7"];
    var mt=["0","2","3","3","4","5","5","6","8"];
    var sn=["0","3","4","4","4","5","6","6","7"];
    var kn=["0","3","4","4","5","6","7","7","8"];
  
    var speed=4;
    var might=3;
    var sanity=4;
    var knowledge=3;

	var color="#00FF00";
	
    break;

   case "prof":

    var sp=["0","2","2","4","4","5","5","6","6"];
    var mt=["0","1","2","3","4","5","5","6","6"];
    var sn=["0","1","3","3","4","5","5","6","7"];
    var kn=["0","4","5","5","5","5","6","7","8"];
  
    var speed=4;
    var might=3;
    var sanity=3;
    var knowledge=5;
 
    var color="#FFFFFF";
    
	break;

   case "vivian":

    var sp=["0","3","4","4","4","4","6","7","8"];
    var mt=["0","2","2","2","4","4","5","6","6"];
    var sn=["0","4","4","4","5","6","7","8","8"];
    var kn=["0","4","5","5","5","5","6","6","7"];
  
    var speed=4;
    var might=3;
    var sanity=3;
    var knowledge=4;
	
	var color="#56CAFF";
 
    break;

   case "zoe":

    var sp=["0","4","4","4","4","5","6","8","8"];
    var mt=["0","2","2","3","3","4","4","6","7"];
    var sn=["0","3","4","5","5","6","6","7","8"];
    var kn=["0","1","2","3","4","4","5","5","5"];
  
    var speed=4;
    var might=4;
    var sanity=3;
    var knowledge=3;

	var color="#FFA500";
	
    break;
}

// Eventually replace this with graphics of the character cards
document.getElementById('dossier').innerHTML = '<img src="' + character + '.jpg" />';   

// Run each stat once, initially
speedcounter() ;
mightcounter() ;
sanitycounter() ;
knowledgecounter() ;

// iPhone: Disable Scrolling
document.addEventListener(
  'touchmove',
  function(e) {
    e.preventDefault();
  },
  false
);

</script>
</body>
</html>
