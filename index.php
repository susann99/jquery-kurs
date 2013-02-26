<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script src="js/index.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
                var arrColor = ["red","blue","green","orange","yellow","mangenta"];
                $("nav a.n0").each(function(index){
                    $(this).addClass("navi"+arrColor[index % arrColor.length]);
		    $("article h1").eq(index).css("color",arrColor[index % arrColor.length]);
                });
                $("nav a").click(function(){
                    $("article").css("display","none");
                    $("article h2:contains('"+$(this).text()+"')").parent().css("display","block");
                });
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
                    <li><a class="n0" href="#doku">Doku</a>
                    
                        <ul>
                            <li>Videos</li>
                            <li>Bücher</li>
                            <li>Websites</li>
                            <li>Kursanbieter</li>
                        </ul>
    
                    </li>
                    <li><a class="n0" href="#links">Links</a>
                        <ul>
                            <li>Arbeitsumgebung</li>
                            <li>jQuery</li>
                            <li>Javascript</li>
                            <li>HTML/CSS</li>
                            <li>weitere Framworks</li>
                        </ul>
                    </li>
                    <li><a class="n0" href="#profil">Profil</a></li>
                    <li><a class="n0" href="#kontakt">Kontakt</a></li>
               </ul>
            </nav>
            <div id="content" style="clear: both;">
                <div id="contentLeft">
                    <div>
                        
                    </div>
                    <article>
                        <h2><a name="home">Home</a></h2>
                        <h1>jQuery-Beispielprojekt</h1>
                        <h4>Achtung die Text-Kästen können auch per Klick Animiert werden,</h4> 
                        dies soll einen kleinen Überblick verschaffen, was jQuery alles an Animation kann. Natürlich gibts noch mehr.
                        <h3>Das Konzepte ist:</h3>
                        <ul class="home">
                            <li>
                                Der gesamte Content ist auf einer Seite (Klorolle), soll aber durch jQuery wie eine Seitennavigation aussehen.
                                <h4>Dieser Kasten blendet bei Klick ein -und aus</h4>
                            </li>
                            <li>
                                Einfache Listen als Navigation, mit Anker, Ausklappmenü.
                                <h4>Hier klicken und der Kasten (Geld...) klappt ein-/aus (slideToggle)</h4>
                            </li>
                            <li style="clear: both;">
                                Geldwerter Content wird nicht durch jQuery ins Document geschieben, Kontaktdaten und persönliche Daten schon.
                            </li>
                            <li>
                                Der Content soll hübsch in Arkkordeon und Karteikarten dargestellt werden, da wo es Sinn macht
                            </li>
                            <li style="clear: both;">
                                Ein Galerie auf jeder Seite.
                                <h4>Hier klicken und der Kasten zeigt mehrere Animation, Schrift und Kastenbreite</h4>
                            </li>
                            <li>Eine Formularanwendung: Kontaktseite.</li>
                            <li style="clear: both;">HTML5 und CSS3, Google</li>
                        </ul>
                    </article>
                    <article>
                        <h2><a name="news">News</a></h2>
			<h1>Projekt - News</h1>
                        <p>Hier könnt Ihr den aktuellen Fortschritt des Projektes verfolgen. Dazu verwende ich die Listendarstellungen von jQuery z.B. mit der Zebradarstellung.</p>
                        Newslisten
                    </article>
                    <article>
                        <h2><a name="inhalt">Inhalt</a></h2>
			<h1>Projekt - Inhalt</h1>
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
                        <h2><a name="doku">Doku</a></h2>
			<h1>Dokumentation</h1>
                        <p>Referenz</p>
                        Newslisten
                    </article>
                    <article>
                        <h2><a name="kontakt">Kontakt</a></h2>
                        <div id="box">
                        <form class="formular" action="#" method="post">
                        <fieldset>
                        <legend>Kontaktformular</legend>
                        <ol class="clearfix">
                          <li>
                            <label for="firstname">Vorname:</label>
                            <input type="text" name="vname" class="name" id="vname" value="" />
                          </li>
                          <li>
                            <label for="lastname">Nachname:</label>
                            <input type="text" name="nname" class="name" id="nname" value="" />
                          </li>
                          <li>
                            <label for="email">E-Mail(optional):</label>
                            <input type="text" name="email" id="email" value="" />
                          </li>
                           <li>
                            <label for="quelle">gefunden:</label>
                                  <input type="checkbox" name="auswahl" id="auswahl1" class="auswahl" /> Googlesuche<br>
                                  <input type="checkbox" name="auswahl" id="auswahl2" class="auswahl" /> Bekannter<br>
                                  <input type="checkbox" name="auswahl" id="auswahl3" class="auswahl" /> Verlinkung<br>
                                  <input type="checkbox" name="auswahl" id="auswahl4" class="auswahl" /> Zeitschrift<br>
                                  <input type="checkbox" name="auswahl" id="auswahl5" class="auswahl" /> 24-fair.com
                          </li>
                          <li>
                            <label for="nachricht">Nachricht:</label>
                            <textarea cols="26" rows="14" name="nachricht" id="nachricht"></textarea>
                          </li>
                          <li class="last">
                            <input type="button" name="submit" id="submit" value="Absenden" />
                          </li>
                        </ol>
                        </fieldset>
                      </form>
                        </div>
                    </article>
                </div>
                <div id="contentRight">
                    <article>
                        <h2><a name="home">Home</a></h2>
                        <div class="imghome"> 
                            <img class="bildhome" name="home1" id="home1" src="images/Amelia-Earhart.png">
                            <img class="bildhome" name="home2" id="home2" src="images/amelia_earhart2.jpg">
                        </div>
                        <br>
                        <p><small>Bildquelle: Google | <a id="ame1" href="#"> Bild 1</a> | <a id="ame2" href="#"> Bild 2</a></small></p>
                       
                        
                        <p>
                        <h3>Amelia Earhart</h3>
                            Amelia Mary Earhart war eine US-amerikanische Flugpionierin und Frauenrechtlerin.<br><br>  
                            24. Juli 1897 in Atchison, Kansas; <br>verschollen am 2. Juli 1937 im Pazifischen Ozean, 
                            für tot erklärt am 5. Januar 1939.<br> 
                            (Quelle: http://de.wikipedia.org)
                            <h4>Um von Bild1 zu Bild2 zu wechseln auf das Bild oder auf den Link Bild 1 bzw. Bild 2 klicken.</h4>
                        </p>
                    </article>
                    <article>
                        <h2><a name="kontakt">Kontakt</a></h2>
                        <img src="images/Amelia-Earhart.png">
                        <p>
                            Kontaktdaten
                        </p>
                    </article>
                </div>
            </div>
            <footer>(c) susann rieder 2013</footer>
        </div>
    </body>
</html>


