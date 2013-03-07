<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css">  
            .text {
                width:320px;color: red;
            }
            .green {
                color: green;
            }
            .classH1neu {
                background-color: gold;
                font-size: large;
            }
            .test {
                font-style: italic;
            }
            xmp {
                display: none;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
               $("#normal").click( function() {
                   //alert(this.id);
                   $("#normal").add("#test").css({color:'red'}).add("<b>dazuaddiert</b>");
                   $("#test").add("<b>dazu addiert add=erzeugen und appendTo=anhängen</b>").appendTo("#normal");
                   $("xmp").css({display:"block"});
               });
                $("#weg").click(function() {
			$("#test").hide(function(){
                            $("p").next("p").html("test ist weg");
                        });
		});
                $("#da").click(function() {
			getShow("300");
		});
                $("#down").click(function() {
			$("#test").slideDown();
		});
                $("#up").click(function() {
			$("#test").slideUp();
		});
                $("#toggle").click(function() {
			$("#test").slideToggle(1000);
		});
                $("#fadetoggle").click(function() {
			$("#test").fadeToggle();
		});
                $("#delay").click(function() {
			$("#test").fadeIn().delay(5000).fadeOut();
		});
            });
            function getShow(t){
                $("#test").show(t);
            }

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Animation Tag04</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <button id="weg">weg</button>
        <button id="da">da</button>
        <button id="down">slide Down</button>
        <button id="up">slide Up</button>
        <button id="toggle">slide toggle</button>
        <button id="fadetoggle">fade Toggle</button>
        <button id="delay">fade in und out delay</button>
        <h1>jQuery Tag4 animieren mit hide(), show(), slide.., fade, toggle</h1>
        <div id="normal">
            <p id="test">show dient zum einblendenProduct Version: NetBeans IDE 7.2.1 (Build 201210100934)
Updates: Updates available
Java: 1.7.0_13; Java HotSpot(TM) 64-Bit Server VM 23.7-b01
System: Windows 7 version 6.1 running on amd64; Cp1252; de_DE (nb)
User directory: C:\Users\cpi\AppData\Roaming\NetBeans\7.2.1
Cache directory: C:\Users\cpi\AppData\Local\NetBeans\Cache\7.2.1</p>
            <p>hide zum verstecken</p>
        </div>
    <xmp>
    so schauts dann aus, obwohl der Quelltext was anderes sagt
       <body>
            <a href="index.php">Inhalt</a>
            <h1>jQuery Tag4 Travestie-Kunst mit add</h1>
            <div id="normal" style="color: red;">
                <p>p2 hier ist ein p</p>
                <p id="test" style="color: red;">hier ist ein p</p><b>dazu addiert add=erzeugen und appendTo=anhängen</b>
            </div>
       </body>
    </xmp>
    </body>
</html>
