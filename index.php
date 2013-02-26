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
                var arrColor = ["green","blue","red","orange","yellow","mangenta"];
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
                    <li><a class="n0" href="#inhalt">Roter Faden</a>
                    <ul>
                            <li><a href="#">Beispiele</a></li>
			    <li><a href="#">Codeschnipsel</a></li>
                            <li><a href="#">Tipps</a></li>
                            <li><a href="#">Downloads</a></li>
                    </ul>
                    </li>
                    <li><a class="n0" href="#doku">Doku</a>
                        <ul>
                            <li><a href="#">Videos</a></li>
                            <li><a href="#">Bücher</a></li>
                            <li><a href="#">Websites</a></li>
                            <li><a href="#">Kursanbieter</a></li>
                        </ul>
    
                    </li>
                    <li><a class="n0" href="#links">Links</a>
                        <ul>
                            <li><a href="#">Arbeitsumgebung</a></li>
                            <li><a href="#">jQuery</a></li>
                            <li><a href="#">Javascript</a></li>
                            <li><a href="#">HTML/CSS</a></li>
                            <li><a href="#">weitere Framworks</a></li>
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
                            <li>Eine Formularanwendung: Kontaktseite. HTML5 und CSS3, Google.</li>
                        </ul>
                    </article>
                    <article>
                        <h2><a name="news">Logbuch</a></h2>
			<h1>Projekt - Logbuch</h1>
                        <p>Hier könnt Ihr den aktuellen Fortschritt des Projektes verfolgen. Dazu verwende ich die Listendarstellungen von jQuery z.B. mit der Zebradarstellung.</p>
                        Newslisten
                    </article>
                    <article>
                        <h2><a name="roterfaden">Roter Faden</a></h2>
			<h1>Der Rote Faden</h1>
                        <p>Dieser Workflow, eine Empfehlung zum Abarbeiten, ist mit einem Arkkordeon umgesetzt. Das heißt die Artikel sind ausklappbar.</p>
                        <div id="accordion">
			    <h3>Einführung</h3>
			    <div>
			      <p></p>
				<ul>
				    <li>Übersicht von JavaScript Frameworks</li>
				    <li>Abgrenzungen zu anderen Frameworks</li>
				    <li>Konzepte zur Anwendung von jQuery</li>
				    <li>Übersicht und Aufgaben von Plugins</li>
				    <li>Kompatibilität zu anderen Frameworks und Browsern</li>
				    <li>Anwendungsfälle und Anwendungsgebiete</li>
				    <li>Barrierefreiheit und Suchmaschinenoptimierung</li>
				</ul>
			    </div>
			    <h3>jQuery Basics</h3>
			    <div>
			      <p></p>
				<ul>
				    <li>Funktionen, Selektoren, Attribute</li>
				    <li>Einbinden und strukturieren von Scripten in HTML-Dokumenten</li>
				    <li>DOM-Objektmodell</li>
				    <li>$() Funktion</li>
				    <li>Filterauswahlen</li>
				    <li>Zugriff auf HTML-Elemente</li>
				    <li>Verkettung von Funktionen</li>
				    <li>Eventhandling und Callbacks</li>
				</ul>
			    </div>
			    <h3>Verändern von HTML und CSS</h3>
			    <div>
			      <p></p>
			      <ul>
				<li>Verändern und Ersetzen von HTML-Elementen</li>
				<li>Verändern und Ersetzen von Text</li>
				<li>CSS-Eigenschaften verändern</li>
				<li>Farbanimationen</li>
				<li>Show/Hide/Toggle-Effekte</li>
				<li>Drag & Drop Effekte</li>
				<li>Easing Effekte</li>
			      </ul>
			    </div>
			    <h3>Plugins</h3>
			    <div>
			      <p></p>
			      <ul>
				<li>jQuery UI Draggable Plugin</li>
				<li>jQuery UI Droppable Plugin</li>
				<li>jQuery UI Sortable Plugin</li>
			      </ul>
			    </div>
			    <h3>Ajax</h3>
			    <div>
			      <p></p>
			      <ul>
				<li>Aufbau einer Ajax Anwendung</li>
				<li>Vor- und Nachteile von Ajax</li>
				<li>Sicherheitsrisiken</li>
				<li>Anforderungen an die Client Plattform</li>
				<li>Anforderungen an die Server Plattform</li>
				<li>Ajax basierende Anwendungsbeispiele</li>
				<li>Daten abrufen</li>
				<li>Parameter senden</li>
				<li>Responses verarbeiten</li>
				<li>XML verarbeiten</li>
				<li>JSON</li>
				<li>Ajax mit PHP, ActionScript, Perl CF und Python, ASP.NET</li>
			      </ul>
			    </div>
			 </div>
                    </article>
                    <article>
                        
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
			<h2><a name="roterfaden">Roter Faden</a></h2>
			<div class="img"> 
                            <img class="bild" name="roter1" id="roter1" src="images/marine1.jpg">
                        </div>
                        <br>
                        <p><h3>Ein Faden im Tauwerk</h3>
			    Unter einem roten Faden versteht man Richtlinie die sich durch ein Projekt zieht. <br>
			    Der Begriff stammt aus der  britischen Marine, hier war in das gesamte Tauwerk der königlichen Flotte
			    ein roter Faden mit eingeflochten. An diesem Faden war zu erkennen das diese Tau zur englichen Flotte gehört.
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


