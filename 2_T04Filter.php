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

        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
                $("p").first().text("neuer Text");
                $("p").last().css({color:'green'});//finde text:schöner und mache den Absatz grün
                //Filter ist eine Methode und gibt true oder false zurück
                $("p").slice(1,2).css({color:'blue'});
                $("div").has('nav').css({border:'2px solid green'});
                $("p").first().css({color:'red'}).end();
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Filter Tag04</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag4 Filter-Kaffe mit first, last, slice, end</h1>
        <div id="normal">
            <p id="test">hier ist ein p</p>
            <p>p2 hier ist ein p</p>
            <div>
                <p>
                    schöner text zu kaffeklatsch
                </p>
                <nav>home</nav>
            </div>
        </div>
    <xmp>
        <div id="normal" style="border: 2px solid green;">
            <p id="test">neuer Text</p>
            <p style="color: blue;">p2 hier ist ein p</p>
            <div style="border: 2px solid green;">
                <p style="color: green;">
                    schöner text zu kaffeklatsch
                </p>
                <nav>home</nav>
            </div>
        </div>
    </xmp>
    </body>
</html>
