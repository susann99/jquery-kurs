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
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Eventhandling Tag05</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag4 Eventhandling</h1>
        <div id="normal">
            <p id="test">hier ist ein p</p>
            <p>p2 hier ist ein p</p>
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
