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
               $("#b1").click( function() {
                $(this).addClass("green");
                $(".normal").find("h2").css("border","2px solid red");
                $(".text").parents("div").css("color","yellow");//wenn gefunden dan verändern
                $("#ih2").css("border","2px solid red").parentsUntil("#halt").css("border","2px solid blue");//hält direkt am Div darüber
               // $("#ih2b").css("background","#f8f8f8").nextUntil().css("background","brown");
               // $("#ih2b").css("background","#ccc").closest("div").css("background","blue");
                $("#ih2b").css("color","green").siblings().css("color","blue");
               });
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Traverse Tag04</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag4 Travestie-Kunst mit find</h1>
        Aufgabe: in einem div ist ein p, das p wird geklick und damit soll sich auch das div ver&auml;ndern
        <button id="b1">find("h2")</button>
        <div class="normal">
             <h1>Davor Eine &Uuml;berschrift</h1>
            <p class="text">Die ist ein zweiter div un p container</p>
            <h2 id="ih2b">Danach Eine h2 &Uuml;berschrift</h2>
            <p class="text">
                <h2 id="ih2bp">Eine h2 &Uuml;berschrift</h2>
                ver&auml;ndern des Elternelemnts mit find p container
            </p>
        </div>
        <div id="halt"><div><h2 id="ih2">Eine h2 &Uuml;berschrift</h2>box halt hier nicht weiter</div></div>
        <div class="normal">
            <div><h1>Davor Eine &Uuml;berschrift</h1>
            <p class="text">Die ist ein zweiter div un p container</p>
            <h2>Danach Eine h2 &Uuml;berschrift</h2></div>
        
        </div>
    </body>
</html>
