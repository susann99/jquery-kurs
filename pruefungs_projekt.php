<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 21 Prüfung</title>
         <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
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
            #left {
                height:600px;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript">
            function loadPage(obj,target) {
                if (!obj.length && !target.length) return;
                obj.click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    obj.removeClass("current");
                    $(this).addClass("current");
                    target.fadeOut("slow",function() {
                        target.load(url,function() {
                            target.fadeIn("slow");
                        });
                    });
                });
            }
            // Wenn DOM geladen
            $(document).ready(function() {
            $("#arc").accordion({
                    heightStyle: "content"
                });
                loadPage($("a"),$("#content"));
            });                


        </script>
    </head>
    <body>
        <div id="header">
            <h1>Projekt Bilder-Gallerie</h1>
        </div>
        <div id="left">
            <a href="pp_galerie.php">Galerie</a><br>
            <a href="pp_slide.php">Slideshow</a>
        </div>
        <div id="content">
            <div id="arc">
            <h3>Inhalt</h3>
            <img src="fotos/bild1.jpg" height="80%">
            <h3>Quellecode der Startseite</h3>
            <div id="quellcode">
                <?php
                show_source(__FILE__);
                ?>
            </div>
            <div>
        </div>
    </body>
</html>
