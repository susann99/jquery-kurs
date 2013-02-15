<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
               $("#navigation a:eq(0)").addClass("naviRot");
               $("#navigation a:eq(1)").addClass("naviBlau");
               $("#navigation a:eq(2)").addClass("naviGruen");
               $("#navigation a:eq(3)").addClass("naviOrang");
               $("#navigation a:eq(4)").addClass("naviYellow");
               $("#navigation a:eq(5)").addClass("naviMangenta");
               $("#navigation a").hover(function(){
                   $(this).addClass("navOver");
               });
               $("#navigation a").mouseout(function(){
                   $(this).removeClass("navOver");
               });
               $("#contentLeft  li:eq(0)").click(function(){
                   $('#contentLeft  li:eq(0)').css("font-weight","bold").append($(".blabla p:eq(0)").addClass("blablaView"));
                   
               });
               $("#contentLeft  li:eq(1)").click(function(){
                   $('#contentLeft  li:eq(1)').css("font-weight","bold").append($(".blabla p:eq(0)").addClass("blablaView"));                   
               });
               $("#contentLeft  li:eq(2)").click(function(){
                   $('#contentLeft  li:eq(2)').css("font-weight","bold").append($(".blabla p:eq(0)").addClass("blablaView"));                   
               });
        });          
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>jQuery -Kurs Inhalt</title>
    </head>
    <body>
    <div id="inhalt">
        <div id="header">Eine Einf&uuml;hrung in das JavaScript-Framework
            <h1>jQuerry Kurs</h1>
        </div>
        <div id="navigation">
                <a href="#">Home</a><a href="#">News</a><a href="#">Inhalt</a><a href="#">Links</a><a href="#">Profil</a><a href="#">Kontakt</a>
        </div>
        <div id="content">
            <div id="contentLeft">
                <h2>Inhalt</h2>
                <ol>
                   <li>Einf&uuml;hrung</li>
                   <li>Selectoren</li>
                   <li>ToDo-Listen</li>
                </ol>
            </div>
            <div id="contentRight">
                <img src="images/Amelia-Earhart.png">
            </div>
        </div>
        <div id="footer">(c) susann rieder 2013 - Kontakt</div>
    </div>
    <div class="blabla">
        <p>
            1. Was ist jQuery<br>
            2. Wie wird es Eingebunden<br>
            3. Erste Finger&uuml;bungen
        </p>
        <p>
            1. Selectoren<br>
            2. Beispiele<br>
            3. Projekt
        </p>
        <p>
            1. Einarbeitung NetBeans<br>
            2. GitHub<br>
            3. kleines Tutorial erstellen
        </p>
    </div>
    </body>
</html>


