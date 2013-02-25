<!DOCTYPE html>
<html>
    <head>
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
               $(".text").click( function() {
                $(this).addClass("green");
                //var elem = document.getElementsByClassName("text")[0].parentNode;
                //alert (elem);
                //childrin
                $(".normal").children().css("border","2px solid red");
                $(this).parent().css({border:'2px solid green'});//Objektschreibweise
                $(".normal").children("h1").css({color:'blue'});
              //  $(this).next("h2").css({background:'#f8f8f8'});//h2 hat keine Auswirkungen?
                $(this).nextAll("h2").css({background:'#f8f8f8'});
                $(this).prev().css({background:'yellow'});
               });
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Elternteil, children, parent, next, nextAll, prev Tag03/4</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag3 ansprechen von &Uuml;bergeordeneten Strukturen</h1>
        Aufgabe: in einem div ist ein p, das p wird geklick und damit soll sich auch das div ver&auml;ndern
        <div class="normal">
            <p class="text">ver&auml;ndern des Elternelemnts mit parent</p>
            <h2>Eine h2 &Uuml;berschrift</h2>
        </div>
        <div class="normal">
            <p class="text">Die ist ein zweiter div un p container</p>
            <h1>Eine &Uuml;berschrift</h1>
            <h2>Eine h2 &Uuml;berschrift</h2>
        </div>
        <div class="normal">
            <h2>davor Eine h2 &Uuml;berschrift</h2>
            <p class="text">Traversierung:Transport von einer Stelle zu einer anderen, Bewegung im DOM, 
                Traverse über Kind- oder Elternknoten </p>
            <h2>danach Eine h2 &Uuml;berschrift</h2>
        </div>
    </body>
</html>
