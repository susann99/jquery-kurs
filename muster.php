<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>muster</title>
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/linker.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">
            $(document).ready(function() {
                function collectLinks(obj){
                    if(!obj.length) return;
                    var label ="<h3>Verwendete Links</h3>";
                    var content = label;
                    var links = obj.find("a");
                    links.each(function(){
                        content += "<p><strong>"+$(this).text()+":</strong>"
                            + "<a href='"+$(this).attr("href")+"'>"
                            + $(this).attr("href")
                            + "</a></p>\n";
                    });
                    $("#footer").html(content); 
                }
                $("#daten").linker();

               collectLinks($("#daten"));
            });                
        </script>
    </head>
    <body>

        <div id ="daten">
            http://jquery.com/jQuery doeioug094gu e90utq90u4 0u0u9er0q89u u90uergu
            http://www.jqueryui.com jQuery UI er0gier  erii9ugw90uweu890
            http://plugins.jquery.com/ jQuery Plugins er0gß0erg rergjrijg
            http://jquerymobile.com jQuery Mobile wergoweropgioer ieoprguioug
             http://try.jquery.com/ jQuery UNI, free Video dfgkfl dfklgjkldfj dfgkldfgjkg
            http://www.blogrammierer.de/jquery-die-23-besten-bildergalerie-plugins/ die 23 besten Bildergalerie dfglödglödfgj nmmnnnfighuir eroueiout 
            http://info.scratch.mit.edu/de/Scratch_1.4_Download Scratch-Spiele Programmieren für Kinder
        </div>
        <div id="footer">hier stehen die Links</div>
    </body>
</html>
