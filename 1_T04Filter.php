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
                $("#normal p").eq(1).text("nur 1 wird geändert");
                $("p").filter(':contains(schöner)').css({color:'green'});//finde text:schöner und mache den Absatz grün
                //Filter ist eine Methode und gibt true oder false zurück
                $("p").not(':contains(schöner)').css({color:'red'});
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Filter Tag04</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag4 Filter-Kaffe mit not, eq, filter</h1>
        <div id="normal">
            <p id="test">hier ist ein p</p>
            <p>p2 hier ist ein p</p>
            <div>
                <p>
                    schöner text zu kaffeklatsch
                </p>
            </div>
        </div>
    <xmp>
    .eq(1) anstelle von <p>p2 hier ist ein p</p> und style ...
        <div id="normal">
            <p id="test" style="color: red;">hier ist ein p</p>
            <p style="color: red;">nur 1 wird geändert</p>
            <div>
                <p style="color: green;">
                    schöner text zu kaffeklatsch
                </p>
            </div>
        </div>
    </xmp>
    </body>
</html>
