<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
           body,html {height:100%;width:100%}
            #rechteMaus {
                display: none;
                position: absolute;
                background-color: gold;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                padding: 5px;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
           
    $(document).ready(function(){
          $("#normal").click(function(){
              var a = $(this).html();
              $("nav").html(a);
          });
          $("#normal").click(function(){
              var t = $(this).text();
              $("nav").html(t);
          });
           $("#normal").click(function(){
              $("nav").empty();
          });
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Events Tag06, HTML und Text</title>
    </head>
    <body oncontextmenu="return false">
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag6 Inhalt, HTML, Text</h1>
        <div id="normal">
            <p id="test">Funktioniert nur im Body: height und wight setzen</p>
            <p>Bitte rechts Klicken</p>
            <p>Links klicken Menü verstecken</p>
            <p>überall klicken</p>
        </div>
        <nav>
            <ul>
                <li>Kanu</li>
                <li><a href="#" title="paddel">Paddel</a></li>
                <li><a href="http://www.globetrotter.de">Schwimmweste</a></li>
            </ul>
        </nav>
   <img src="images/Amelia-Earhart.png">
    </body>
</html>
