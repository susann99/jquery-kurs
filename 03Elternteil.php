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
            <p class="text">Hier spielt auch die </p>
        </div>
    </body>
</html>
