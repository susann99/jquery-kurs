<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
                var arrColor = ["Rot","Blau","Gruen","Orang","Yellow","Mangenta"];
                $("nav a").each(function(index){
                    $(this).addClass("navi"+arrColor[index % arrColor.length]);
                });
                $("article li").children().css("display","none");
                $("article li").click(function(){
                    $("article li").css("font-weight","normal")
                    $("article li").children().css("display","none");
                    $(this).css("font-weight","bold");
                    $(this).children().css("display","block").css("font-weight","normal");                   
                });
                $("nav a").click(function(index){
                    $("article li").css("font-weight","normal")
                    $("article li").children().css("display","none");
                    $("article").css("display","none");
                    $("article h2:contains('"+$(this).text()+"')").parent().css("display","block")
                });
            });          
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>jQuery -Kurs Inhalt</title>
    </head>
    <body>
        <div id="inhalt">
            <header>Eine Einf&uuml;hrung in das JavaScript-Framework
                <h1>jQuerry Kurs</h1>
            </header>
            <nav>
                <a href="#">Home</a><a href="#">News</a><a href="#">Inhalt</a><a href="#">Links</a><a href="#">Profil</a><a href="#">Kontakt</a><a href="#">Hamburg</a>
            </nav>
            <div id="content">
                <div id="contentLeft">
                    <article>
                        <h2>Home</h2>
                        <p>Diese kleine Projekt ist die Dokumentation zu einem jQuerykurs</p>
                    </article>
                    <article>
                        <h2>News</h2>
                        <p>3 Tag nix los</p>
                    </article>
                    <article>
                        <h2>Inhalt</h2>
                        <ol>
                            <li>
                                Einf&uuml;hrung
                                <p>
                                    1. Was ist jQuery<br>
                                    2. Wie wird es Eingebunden<br>
                                    3. Erste Finger&uuml;bungen
                                </p>
                            </li>
                            <li>
                                Selectoren
                                <p>
                                    1. Selectoren<br>
                                    2. Beispiele<br>
                                    3. Projekt
                                </p>
                            </li>
                            <li>
                                best Praktik mit each, modulo, this
                                <p>
                                    for each Schleife in jQuery: $.each(arrColor, function(index, value) {...});
                                </p>
                            </li>
                             <li>
                                ToDo-Listen
                                <p>
                                    1. Einarbeitung NetBeans<br>
                                    2. GitHub<br>
                                    3. kleines Tutorial erstellen
                                </p>
                            </li>
                        </ol>
                    </article>
                </div>
                <div id="contentRight">
                    <img src="images/Amelia-Earhart.png">
                </div>
            </div>
            <footer>(c) susann rieder 2013 - Kontakt</footer>
        </div>
    </body>
</html>


