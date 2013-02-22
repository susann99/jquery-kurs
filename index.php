<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
                $("nav a").click(function(){
                    $("article li").css("font-weight","normal")
                    $("article li").children().css("display","none");
                    $("article").css("display","none");
                    $("article h2:contains('"+$(this).text()+"')").parent().css("display","block")
                });
            });
            function menu(obj){
              if (!obj.length) return;
              $("div").removeClass("menue");
              $(obj).hover(function(){
              $(this).find('ul').slideDown(500,function(){
                $(this).css({
                    overflow: "visible"
                });     
                });
              },function(){
              $(this).find('ul').first().stop(true, true).slideUp(500);
            });
            }
            $(document).ready(function(){
                    menu($("ul li"));
            });
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>jQuery -Kurs Inhalt</title>
    </head>
    <body>
        <div id="inhalt" class="menue">
            <header>Eine Einf&uuml;hrung in das JavaScript-Framework
                <h1>jQuery Kurs</h1>
            </header>
            <nav>
            <!--[if IE 6]><div id="ie6"></div><![endif]--> 
                <ul>
                    <li><a class="n0" href="#home">Home</a></li>
                    <li><a class="n0" href="#news">News</a></li>
                    <li><a class="n0" href="#inhalt">Inhalt</a>
                    <ul>
                            <li><a href="#">Kapitel</a></li>
                            <li><a href="#">Beispiele</a></li>
                            <li><a href="#">Projekt</a></li>
                            <li><a href="#">Downloads</a></li>
                    </ul>
                    </li>
                    <li class="n0"><a href="#doku">Doku</a>
                    
                        <ul>
                            <li>Videos</li>
                            <li>Bücher</li>
                            <li>Websites</li>
                            <li>Kursanbieter</li>
                        </ul>
    
                    </li>
                    <li class="n0"><a href="#links">Links</a>
                        <ul>
                            <li>Arbeitsumgebung</li>
                            <li>jQuery</li>
                            <li>Javascript</li>
                            <li>HTML/CSS</li>
                            <li>weitere Framworks</li>
                        </ul>
                    </li>
                    <li class="n0"><a href="#profil">Profil</a></li>
                    <li class="n0"><a href="#kontakt">Kontakt</a></li>
               </ul>
            </nav>
            <div id="content" style="clear: both;">
                <div id="contentLeft">
                    <div>
                        
                    </div>
                    <article>
                        <h2><a name="home">Home</a></h2>
                        <p>Dies ist ein kleines Beispielprojekt zu einem jQuery-Kurs.</p>
                        <h3>Da ich selber noch nicht der jQueryChrack bin habe ich ein einfaches Konzept gewählt:</h3>
                        <ul>
                            <li>
                                der gesamte Content ist auf einer Seite (Klorolle), soll aber durch jQuery wie eine Seitennavigation aussehen
                            </li>
                            <li>
                                einfache listen als Navigation, mit Anker, Ausklappmenü
                            </li>
                            <li>
                                Geldwerter Content wird nicht durch jQuery erzeugt
                            </li>
                            <li>
                                der Content soll hübsch in Arkkordeon und Karteikarten dargestellt werden, da wo es Sinn macht
                            </li>
                            <li>
                                Ein Galerie auf jeder Seite
                            </li>
                            <li>Eine Formularanwendung: Kontaktseite</li>
                            <li>HTML5 und CSS3, Google</li>
                        </ul>
                    </article>
                    <article>
                        <h2><a name="news">News</a></h2>
                        <p>Hier könnt Ihr den aktuellen Fortschritt des Projektes verfolgen. Dazu verwende ich die Listendarstellungen von jQuery z.B. mit der Zebradarstellung.</p>
                        Newslisten
                    </article>
                    <article>
                        <h2><a name="inhalt">Inhalt</a></h2>
                        <p>Der Inhalt ist mit einem Arkkordeon umgesetzt. Das heißt die Artikel sind ausklappbar.</p>
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
                                best Practic mit each, modulo, this
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
                    <article>
                        <h2><a name="news">Docu</a></h2>
                        <p>Referenz</p>
                        Newslisten
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


