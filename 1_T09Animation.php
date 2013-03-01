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
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
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
                $("#head1").animate({fontSize:"36px",opacity:0.5,color:"red",backgroundColor:"yellow"},2000);// geht nur mit ui-plugin
        });
});
$(document).ready(function(){
   $("#bild1").click( function() {
      $(this).animate(
      {height:'0px',opacity:'0'},//color geht nicht, nur mit plugin
      2000,
      function(){
          $(this).animate(
            {height:'180px',opacity:'1'},//color geht nicht, nur mit plugin
            2000
          )}
      )})
});
$(document).ready(function(){
   $("#bild2").hover( function() {
      $(this).animate(
          {width:'500px',opacity:'0'},
           500
       )},
        function(){
          $(this).animate(
            {width:'250px',opacity:'1'},
            500
        )}
    );
    $("#bild3").click(function() {
                $(this).animate({width:'-=200px'},1000)//soll um 100 Pixel größer werden
                .animate({opacity:'0'},500)
                .animate({opacity:'1'},{duration:1000, queue:false,complete: function(){
                        alert("fertig");
                }})
                .animate({width:'+=200px'},{duration:1000, queue:false,easing:'linear'})//queue:false gleichzeitg diese Animation wird an die 1. Stelle geholt: es wird erst groß, dann blendet es aus
    });
    $( "#bild4" ).draggable();
});
 $(function() {
    $( "#accordion" ).accordion();
});


        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Farb -Animation Tag08</title>
    </head>
<body>
<div id="content">
<h1>JQuery 2</h1>
<div>
	<button id="verstecken">Inhalt versteckenn</button>
	<button id="anzeigen">Inhalt anzeigen</button>
	<button id="ausblenden">Bild ausblenden</button>
	<button id="einblenden">Bild einblenden</button>
	<button id="transparenz">Bild tranzparens</button>
</div>
<div>
	<button id="einklappen">Artikel einklappen</button>
	<button id="ausklappen">Artikel ausklappen</button>
	<button id="ein-aus">Artikel ein-aus</button>
	<button id="ersetzen">Footertext ersetzen</button>
	<button id="animation">Text animation</button>
</div>

<h1 id="head1">This document is dedicated to the</h1>
<h2 id="head2">countless lost hours of both people</h1>
<div><img id="bild1" src="images/Amelia-Earhart.png"></div><div><img id="bild2" src="images/Amelia-Earhart.png"></div>
<div><img id="bild3" src="images/Amelia-Earhart.png"></div><img id="bild4" src="images/Amelia-Earhart.png" class="ui-widget-content">
	<p id="artikel">This markup is based in the default appearance of Microsoft Windows. 
	This can be different on your own system, but the names (text) should always the same. 
	This is especially important on the screenshots. 
	They are only for reference, your appearance of Notepad++ can be quite different.</p>
	<div id="footer">Datum</div>
</div>
<div id="accordion">
<h3>Section 1</h3>
<div>
<p>
Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
</p>
</div>
<h3>Section 2</h3>
<div>
<p>
Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
suscipit faucibus urna.
</p>
</div>
<h3>Section 3</h3>
<div>
<p>
Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
</p>
<ul>
<li>List item one</li>
<li>List item two</li>
<li>List item three</li>
</ul>
</div>
<h3>Section 4</h3>
<div>
<p>
Cras dictum. Pellentesque habitant morbi tristique senectus et netus
et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
mauris vel est.
</p>
<p>
Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
inceptos himenaeos.
<ul>
    <li>test</li>
    <li>test</li>
    <li>test</li>
</ul>
<ol type="1">
    <li>hhhhh</li>
    <li>hhhhh</li>
</ol>
</p>
</div>
</div>
</body>
</html>
