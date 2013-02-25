<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
           *{margin:0; padding:0; font:14px;}
button {width:100px;}
p,h1,h2 {margin:20px auto;}
h1 {font-size:20px}
h2 {font-size:16px}
#content {margin:20px auto; width:720px;}
           #normal {
               color: red;
           }
           p {
               color:red;
               border: teal thin solid;
               width:auto;
           }
           
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript">
jQuery.error = console.error;
$(document).ready(function() {
        $("#verstecken").click(function() {
                $("#content").hide(300);
        });
        $("#anzeigen").click(function() {
                $("#content").show(300);
        });	
        $("#ausblenden").click(function() {
                $("#bild").fadeOut(300);
        });	
        $("#einblenden").click(function() {
                $("#bild").fadeIn(300);
                $("#bild").fadeTo(300,1);
        });	
        $("#transparenz").click(function() {
                $("#bild").fadeTo(300,0.0);
        });
        $("#einklappen").click(function() {
                $("#artikel").slideUp(500);
        });
        $("#ausklappen").click(function() {
                $("#artikel").slideDown(500);
        });
        $("#ein-aus").click(function() {
                $("#artikel").slideToggle(500);
        });
        $("#ersetzen").click(function() {
                $("#footer").replaceWith("<p>Footer Text</p>");
        });
        $("#animation").click(function() {
                $("#head1").animate({fontSize:"36px",opacity:0.5},2000);
        });
});
$(document).ready(function(){
   $("img").click( function() {
      $(this).animate({
          height:'0px',opacity:'0',color:'blue'//color geht nicht, nur mit plugin
      },2000,function(){
          $(this).animate({
          height:'180px',opacity:'1',color:'blue'//color geht nicht, nur mit plugin
      },2000);
      });
  });
});


        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Farb -Animation Tag08</title>
    </head>
<body>
<div id="content">
<h1>JQuery 2</h1>

	<button id="verstecken">Inhalt versteckenn</button>
	<button id="anzeigen">Inhalt anzeigen</button>
	<button id="ausblenden">Bild ausblenden</button>
	<button id="einblenden">Bild einblenden</button>
	<button id="transparenz">Bild tranzparens</button>


	<button id="einklappen">Artikel einklappen</button>
	<button id="ausklappen">Artikel ausklappen</button>
	<button id="ein-aus">Artikel ein-aus</button>
	<button id="ersetzen">Footertext ersetzen</button>
	<button id="animation">Text animation</button>

<h1 id="head1">This document is dedicated to the</h1>
<h2 id="head2">countless lost hours of both people</h1>
<img id="bild" src="images/Amelia-Earhart.png">
	<p id="artikel">This markup is based in the default appearance of Microsoft Windows. 
	This can be different on your own system, but the names (text) should always the same. 
	This is especially important on the screenshots. 
	They are only for reference, your appearance of Notepad++ can be quite different.</p>
	<div id="footer">Datum</div>
</div>
</body>
</html>
