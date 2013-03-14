<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 21 Prüfung</title>
        <style>
            #bilder {
                display:none;

            }
            #leinwand {
                position: relative;
                height:460px;
            }
            #filmleiste {
                position: relative;
                top:2px;
                z-index: 1000;
                opacity: 0.8;
            }
            .img {
                width: 600px;

            }
            #info {
                position: absolute; top:40px;
                background-color: darkblue;
                color:white;
                z-index: 100;
            }
            .beschreibung {
                opacity: 0.8;
                width: auto;
                height: 20px;
                padding: 10px;
                margin:10px;
            }
            .bildgross {
                width: 600px;
            }
            .bildklein {
                width: 120px;
                height: 80px;
                opacity: 0.6;
            }
            .quellcode {
                position:relative;
            }
        </style>
        <script type="text/javascript">                
            $(document).ready(function() {
                $("#bilder img").addClass("bildklein");
                var arrImgButton = $("#bilder img");
                var filmButton = "<br>";
                for(i=0;i<arrImgButton.length;i++){
                    var j = arrImgButton[i];
                    filmButton += "<button>"+j.outerHTML+"</button>";
                    $("#filmleiste").html(filmButton);
                }
                $("#filmleiste img").mouseover(function(){
                    $("#filmleiste img").css("opacity","0.6");
                    $(this).css("opacity","1");
                });
                $("#filmleiste button").click(function(){
                    var bild = $(this).html();
                    var InfoText = $(this).children().attr("title");
                    $("#info").removeClass("beschreibung").html(InfoText).addClass("beschreibung",1000);
                    $("#leinwand").html(bild);
                    $("#leinwand img").removeClass("bildklein",1000).addClass("bildgross",1000);
                });
                $("#arc").accordion({
                    heightStyle: "content",
                    collapsible: true
                });
            });

        </script>
    </head>
    <body>
        <div id="bilder">
            <img class="img" src="fotos/bild1.jpg" title="Bild1: Drachenboot WM 2010 Toronto, Abfahrt zum Regattagelände">
            <img class="img" src="fotos/bild2.jpg" title="Bild2: Hintergrund die Amis - Nationalteam">
            <img class="img" src="fotos/bild3.jpg" title="Bild3: Gleichzeitig lief noch der Torontocup für Funteams">
            <img class="img" src="fotos/bild4.jpg" title="Bild4: Innenstadt von Toronto, Ankunft der Mannschaft">
            <img class="img" src="fotos/bild5.jpg" title="Bild4: Boots-über-Boots Bergung mit zwei Grosscanadiern (Kanus), auch in Toronto">
        </div>
        <div id="arc">
            <h3>Inhalt</h3>
            <div>
                <div id="info"></div>
                <div id="leinwand">
                    <img class="img" src="fotos/bild1.jpg">

                </div>

                <div id="filmleiste">

                </div>
            </div>
            <h3>Quellcode</h3>
            <div class="quellcode">
                <h2>Quellecode der Galerie</h2>
                <?php
                show_source(__FILE__);
                ?>
            </div>
        </div>
    </body>
</html>
