<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script src="js/jquery.cycle.all.js" type="text/javascript"></script>
        <!-- http://malsup.github.com/jquery.cycle.all.js -->
        <script src="js/index.js" type="text/javascript" ></script>
        <script type="text/javascript" >
            $(document).ready(function(){
                $("article").css("display","none");
                $("#contentLeft h2").css("display","none");
                $("#contentRight").css("display","block");
                var arrColor = ["green","blue","red","orange","yellow","mangenta"];
                $("nav a.n0").each(function(index){
                    $(this).addClass("navi"+arrColor[index % arrColor.length]);
		    $("article h1").eq(index).css("color",arrColor[index % arrColor.length]);
                });
                $(".start").css("display","block");
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
                    <li><a class="n0" href="#logbuch">Logbuch</a></li>
                    <li><a class="n0" href="#roterfaden">Roter Faden</a>
                    <ul>
                            <li><a href="#buch">Buchempfehlung</a></li>
			    <li><a href="#beispiel">Beispiele</a></li>
                            <li><a href="#tipps">Tipps</a></li>
                            <li><a href="#">Downloads</a></li>
                    </ul>
                    </li>
                    <li><a class="n0" href="#doku">Lernmaterial</a>
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
                    <article class="start">
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
                        <h2><a name="tipps">Tipps</a></h2>
			<h1>Ein paar Tipps</h1>
                        <p>Hier könnt Ihr den aktuellen Fortschritt des Projektes verfolgen. Mit Interactions/Sortable/Portlets uas der UI.</p>
                       <div class="column">
 
                        <div class="portlet">
                          <div class="portlet-header"> Was ist jQuery?</div>
                          <div class="portlet-content">
                              Ein Javascript-Framwork! Erweiterungen einer Programmiersprache wie eine Art Akkuschrauber mit schönen Aufsätzen (Toolset).
                          </div>
                        </div>

                        <div class="portlet">
                          <div class="portlet-header">Javascript-Framwork</div>
                          <div class="portlet-content">
                              <ul>
                                  <li>Ext JS</li>
                                  <li>Dojo - Dojo Community + node.js</li>
                                  <li>GWT (typisch Google, immer etwas komplex)</li>
                                  <li>script.aculo.us - Frackles</li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      <div class="column">
                        <div class="portlet">
                          <div class="portlet-header">Shopping</div>
                          <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>
                      </div>
                      <div class="column">
                        <div class="portlet">
                          <div class="portlet-header">Links</div>
                          <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>
                        <div class="portlet">
                          <div class="portlet-header">Images</div>
                          <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div>
                        </div>
                      </div>
                    </article>
                    <article>
                        <h2><a name="roterfaden">Roter Faden</a></h2>
			<h1>Der Rote Faden</h1>
                        <p>
                            Dieser Workflow, eine Empfehlung zum Abarbeiten, ist mit einem Arkkordeon umgesetzt. Das heißt die Artikel sind ausklappbar.
                            <h4>Dazu muß die <a href="http://jqueryui.com/" title="jQuery UI ist ein sehr Umpfangreiches Plugin, mit vielen Tools.">jQuery UI</a> eingebunden sein.</h4>
                        </p>
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
                        <h2><a name="buch">Buchempfehlung</a></h2>
			<h1>JQuery: Das Praxisbuch</h1>
                        <h4>Der hier angezeigt Content in mit dem <a href="http://jqueryui.com/tabs/" title="Karteikartenreiter aus der UI">Widgets "Tabs"</a> aus der der jQuery UI dargestellt.</h4>
                        <div id="tabs">
                            <ul>
                                <li><a href="#tab-1">Übersicht</a></li>
                                <li><a href="#tab-2">Inhalt</a></li>
                                <li><a href="#tab-3">DVD-Inhalt</a></li>
                            </ul>
                            <div id="tab-1">
                                <h3>JQuery: Das Praxisbuch</h3>
                                 Autoren: Maximilian Vollendorf und Frank Bongers, Verlag: Galileo Computing, 2011
                                 <br><br>   
                                 Das Buch bietet einen umfassenden Einstieg mit vielen Codebeispielen (die meißten sind auch fehlerfrei)
                                 zum Nachtippen, die DVD ist sensationell, auch Linuxfreunde werden bedacht.
                                 <br><br> 
                                <a style="color:blue" href="http://www.galileocomputing.de/katalog/buecher/titel/gp/titelID-2930" title="JQuery bei Galileo">Kostet zur Zeit: 34 Euro</a> 
                            </div>
                            <div id="tab-2">
                                <h3>Inhalt:</h3>
                                <ol class="listenormal">
                                    <li>Lernen Sie jQuery kennen</li>
                                    <li>Richten Sie Ihre Arbeitsumgebung ein</li>
                                    <li>
                                        jQuery von A bis Z
                                        <ul class="listenormal">
                                            <li>Einstieg</li>
                                            <li>Übersicht</li>
                                        </ul>
                                    </li>
                                    <li>Zahlreiche fertige Praxislösungen</li>
                                    <li>Webanwendungen mit Ajax leicht gemacht</li>
                                    <li>Mobile Anwendungen entwickeln</li>
                                    <li>Unit-Tests, HTML/CSS, JavascriptDOM</li>
                                </ol>
                            </div>
                            <div id="tab-3">
                                <h3>DVD-Inhalt:</h3>
                                <ul class="listenormal">
                                    <li>Video-Lektionen zu jQuery Mobile</li>
                                    <li>Alle Beispiele</li>
                                    <li>Direkt einsetzbare Praxislösungen</li>
                                    <li>Zahlreiche jQuery-Plugins</li>
                                    <li>Google Closure Compiler</li>
                                    <li>Editoren für Windows, Linux und MacOS X</li>
                                    <li>Adobe Dreamweaver CS 5.5 (Testversion)</li>
                                </ul>
                            </div>                            
                        </div>    
                        <h4>Eine weitere Empfehlung:</h4>
                        <h3>jQuery lernen und einsetzen</h3>
                        Für 29,99 Kindle, Autoren: Jonathan Chaffer, Karl Swedberg, Volkmar Gronau<br>
                        Verlag: dpunkt.verlag; Auflage: 1. Auflage (Übers. d. 3. engl. Aufl.) (3. Juli 2012)<br><br>
                       <a href="http://www.amazon.de/gp/product/B008UCNMHI/ref=as_li_ss_tl?ie=UTF8&camp=1638&creative=19454&creativeASIN=B008UCNMHI&linkCode=as2&tag=portalfurwand-21" title="Kindle Buch bei Amazoon">jQuery lernen und einsetzen: Bessere Webanwendungen mit einfachen JavaScript-Techniken entwickeln</a><img src="http://www.assoc-amazon.de/e/ir?t=portalfurwand-21&l=as2&o=3&a=B008UCNMHI" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                    </article>
                    <article>
                        <h2><a name="beispiel">Beispiele</a></h2>
			<h1>Beispiele mit Zebra</h1>
                        <h4>Die Tabelle ist als Zebra mit einer Mouseoverfunktion umgesetzt. Wird folgende Collectio mit dem Filterselector even (also alle ungeraden) erzeugt: 
                            <br>$('.paginated tr:even').addClass('even');  </h4>
                        <table id="sortable" class="paginated">
                        <thead>
                                <tr>
                                    <th class="numeric">Nr.</th>
                                    <th>Animation</th>
                                    <th>Code</th>
                                    <th>Erläuterung</th>
                                </tr>
                        </thead>
                            <tbody>
                                <tr>
                                        <td>1</td>
                                        <td>show()</td>
                                        <td>$("#test").show(300);</td>
                                        <td>
                                            <button id="bshow">Fahne Anzeigen</button>
                                            <div id="dshow">
                                                <img src="images/anima1.png">
                                            </div>
                                        </td>
                                </tr>
                                <tr>
                                        <td>2</td>
                                        <td>hide()</td>
                                        <td>$("#test").hide(300);</td>
                                        <td><button id="bhide">Fahne Weg</button></td>
                                </tr>
                                <tr>
                                        <td>3</td>
                                        <td>fadeOut()</td>
                                        <td>$("#test").fadeOut(300);</td>
                                        <td>
                                            <button id="bfadeout">Fahne Ausblenden</button>
                                            <div id="dfade">
                                                <img src="images/anima1.png">
                                            </div>
                                        </td>
                                </tr>
                                <tr>
                                        <td>4</td>
                                        <td>fadeIn()</td>
                                        <td>$("#test").fadeIn(300);</td>
                                        <td>
                                            <button id="bfadein">Fahne Einblenden</button>
                                        </td>
                                </tr>
                                <tr>
                                        <td>5</td>
                                        <td>slideUp()</td>
                                        <td>$("#test").slideUp(300);</td>
                                        <td>
                                            <button id="bslideup">Fahne Einklappen</button>
                                            <div id="dslide">
                                                <img src="images/anima1.png">
                                            </div>
                                        </td>
                                </tr>
                                <tr>
                                        <td>6</td>
                                        <td>slideDown()</td>
                                        <td>$("#test").slideDown(300);</td>
                                        <td>
                                            <button id="bslidedown">Fahne Ausklappen</button>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
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
                    <article class="start">
                        <h2><a name="home">Home</a></h2>
                        <div class="rightpics"> 
                            <img class="bildhome" name="home1" id="home1" src="images/Amelia-Earhart.png" width="267" height="188">
                            <img class="bildhome" name="home2" id="home2" src="images/amelia_earhart2.jpg" width="267" height="188">
                        </div>
                        <small>Bildquelle: Google/wikipedia.org | <a id="ame1" href="#"> Bild 1</a> | <a id="ame2" href="#"> Bild 2</a></small>
                        <p>
                        <h3>Amelia Earhart</h3>
                            Amelia Mary Earhart war eine US-amerikanische Flugpionierin und Frauenrechtlerin.<br><br>  
                            24. Juli 1897 in Atchison, Kansas; <br>verschollen am 2. Juli 1937 im Pazifischen Ozean, 
                            für tot erklärt am 5. Januar 1939.<br> 
                            <small>(Quelle: http://de.wikipedia.org)</small>
                            <h4>Um von Bild1 zu Bild2 zu wechseln auf das Bild oder auf den Link Bild 1 bzw. Bild 2 klicken.</h4>
                        </p>
                    </article>
                    <article>
			<h2><a name="logbuch">Logbuch</a></h2>
                        <iframe width="280" height="220" src="http://www.youtube.com/embed/ioZCEpRLpxo?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                        <p>
                        <h3>Amelia</h3> 
                            <a style="float: left;margin:3px;" href="http://www.amazon.de/gp/product/B003V3FNY6/ref=as_li_ss_il?ie=UTF8&camp=1638&creative=19454&creativeASIN=B003V3FNY6&linkCode=as2&tag=portalfurwand-21"><img border="0" src="http://ws.assoc-amazon.de/widgets/q?_encoding=UTF8&ASIN=B003V3FNY6&Format=_SL160_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=portalfurwand-21" ></a><img src="http://www.assoc-amazon.de/e/ir?t=portalfurwand-21&l=as2&o=3&a=B003V3FNY6" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                            Eine Filmbiografie von Mira Nair (mit Hilary Swank in der Titelrolle und 
                            Richard Gere als ihrem Ehemann G.P. Putnam) kam in den USA im Herbst 2009 in die Kinos, 
                            der Filmstart in Deutschland war im Juni 2010. <br><small>Quelle: wikipedia.org/Amazon</small>
                        </p>
                    </article>
		    <article>
			<h2><a name="roterfaden">Roter Faden</a></h2>
			<div id="s1" class="rightpics">
                                <img src="images/marine1.jpg" width="267" height="188" />
                                <img src="images/marine2.jpg" width="267" height="188" />
                                <img src="images/marine3.jpg" width="267" height="188" />
                        </div>
                        <small>Bildquelle: Google/wikipedia.org</small>
                        <br>
                        <p><h3>Ein Faden im Tauwerk</h3>
			    Unter einem roten Faden versteht man eine Richtlinie, die sich durch ein Projekt zieht. <br>
			    Der Begriff stammt aus der  britischen Marine. In das gesamte Tauwerk der königlichen Flotte war 
			    ein roter Faden eingeflochten.<br>
                            <small>(Quelle: http://de.wikipedia.org)</small>
                            <h4>Die kleine Slideshow ist mit dem jQuery-Plugin <a href="http://malsup.com/jquery/cycle/begin.html">cycle</a> umgesetzt:</h4>
                            ist einfach Einzubinden und bietet viele Varianten, z.B. Galerie mit Bilderauswahl.
                         </p>
                    </article>
                    <article>
                        <h2><a name="buch">Buchempfehlung bei Amazoon</a></h2>
                        <div>
                        <a href="http://www.amazon.de/gp/product/3836218100/ref=as_li_ss_il?ie=UTF8&camp=1638&creative=19454&creativeASIN=3836218100&linkCode=as2&tag=portalfurwand-21"><img border="0" src="http://ws.assoc-amazon.de/widgets/q?_encoding=UTF8&ASIN=3836218100&Format=_SL160_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=portalfurwand-21" ></a><img src="http://www.assoc-amazon.de/e/ir?t=portalfurwand-21&l=as2&o=3&a=3836218100" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                        <a href="http://www.amazon.de/gp/product/B008UCNMHI/ref=as_li_ss_il?ie=UTF8&camp=1638&creative=19454&creativeASIN=B008UCNMHI&linkCode=as2&tag=portalfurwand-21"><img border="0" src="http://ws.assoc-amazon.de/widgets/q?_encoding=UTF8&ASIN=B008UCNMHI&Format=_SL160_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=portalfurwand-21" ></a><img src="http://www.assoc-amazon.de/e/ir?t=portalfurwand-21&l=as2&o=3&a=B008UCNMHI" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                        <a href="http://www.amazon.de/gp/product/3836216787/ref=as_li_ss_il?ie=UTF8&camp=1638&creative=19454&creativeASIN=3836216787&linkCode=as2&tag=portalfurwand-21"><img border="0" src="http://ws.assoc-amazon.de/widgets/q?_encoding=UTF8&ASIN=3836216787&Format=_SL160_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=portalfurwand-21" ></a><img src="http://www.assoc-amazon.de/e/ir?t=portalfurwand-21&l=as2&o=3&a=3836216787" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                        <a href="http://www.amazon.de/gp/product/3645601678/ref=as_li_ss_il?ie=UTF8&camp=1638&creative=19454&creativeASIN=3645601678&linkCode=as2&tag=portalfurwand-21"><img border="0" src="http://ws.assoc-amazon.de/widgets/q?_encoding=UTF8&ASIN=3645601678&Format=_SL160_&ID=AsinImage&MarketPlace=DE&ServiceVersion=20070822&WS=1&tag=portalfurwand-21" ></a><img src="http://www.assoc-amazon.de/e/ir?t=portalfurwand-21&l=as2&o=3&a=3645601678" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                        </div>
                        <hr>
                        <h4>Kostenlose EDV-Bücher online</h4>
                        Auch ein Blick auf das <a href="http://openbook.galileocomputing.de/javascript_ajax/">kostenlose Onlineangebot</a> von Gelileo Press lohnt sich. Ist nur leider kein jQuery-Buch dabei.
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


