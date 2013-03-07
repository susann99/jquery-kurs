<!DOCTYPE html>
<html>
    <head>
       <style type="text/css">        
            .classH1 {
                color: brown;
            }
            .classH1neu {
                background-color: gold;
                font-size: large;
            }
            .test {
                font-style: italic;
            }
            .text {
                width:320px;color: red;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
                $("#sel").css("background-color","#ccc");
                $(".text").css("width","400px");
                $("h1").addClass("classH1neu");
                $("ol").css("background-color","#ccc").css("width","400px");
                $("li:eq(1)").css("background-color","#f8f8f8").css("font-size","30px").css("width","800px");
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Selectoren Tag02</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag2 Selectoren</h1>
        <ol>
            <li>Was sind Selectoren</li>
            <li>Wie spreche ich diese an $("li:eq(1)") = zweites Listenlement soll hellgrau hinterlegt werden und der Font 16px</li>
            <li>Chicke Funktionen</li>
        </ol>
        <div id="sel">
            <p class="text">Selectoren: z.B. #sel => id="sell", .text => class="text", h1 => h1<br></p>
            
        </div>
    </body>
</html>
