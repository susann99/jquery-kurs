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
               });
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Elternteil Tag03</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag3 ansprechen von Übergeordeneten Strukturen</h1>
        Aufgabe: in einem div ist ein p, das p wird geklick und damit soll sich auch das div ver&auml;ndern
        <div class="normal">
            <p class="text">ver&auml;ndern des Elternelemnts mit parent</p>
        </div>
        <div class="normal">
            <p class="text">Die ist ein zweiter div un p container</p>
        </div>
        <div class="normal">
            <p class="text">Traversierung:Transport von einer Stelle zu einer anderen, Bewegung im DOM, Traverse über Kind- oder Elternknoten </p>
        </div>
    </body>
</html>
