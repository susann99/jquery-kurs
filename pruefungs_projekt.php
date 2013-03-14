<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 21 Prüfung</title>
        <link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <style>
            * {margin:0; padding:0; font-family:Arial, sans-serif; font-size:14px; }
            body,html {height:100%;}
            h1 {
                font-weight: 100;
                font-size:40px;
                font-style: italic;
                color: darkred;
                font-family: Lobster;
            }
            #header {
                font-size:14px;padding:5px;max-width:900px;height:60px;background-color: yellowgreen;
            }
            #left{
                padding:5px;
                padding-top:2px;
                margin-top:2px;
                background-color:whitesmoke;
                position:absolute;
                width:120px;
            }
            #content {
                position:relative;left:140px; margin-top:2px; max-width:750px; min-height: 500px;
            }
            #bilder {
                display:none;
            }
            .bildgross {
                height: 80%;
            }
            .bildklein {
                width: 120px;
                height: 80px;
                opacity: 0.6;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
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
                        $("#leinwand").html(bild);
                        $("#leinwand img").removeClass("bildklein").addClass("bildgross");
                    });
                });
        </script>
    </head>
    <body>
        <div id="bilder">
            <img src="fotos/bild1.jpg">
            <img src="fotos/bild2.jpg">
            <img src="fotos/bild3.jpg">
            <img src="fotos/bild4.jpg">
            <img src="fotos/bild5.jpg">
        </div>
        <div id="header">
            <h1>Projekt Bilder-Gallerie</h1>
        </div>
        <div id="left">
            bildleiste
        </div>
        <div id="content">
            <div id="leinwand">
                <img src="fotos/bild1.jpg" height="80%">
            </div>
            <div id="filmleiste">
                
            </div>
        </div>
    </body>
</html>
