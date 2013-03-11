<!DOCTYPE html>
<html>
<head>
   <title>jquery reads xml</title>
   <meta charset="UTF-8">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
 
   <script type="text/javascript">
    
   $(document).ready(function()
   {
 
        // ganze XML-datei einlesen und in variable 'XMLmediaArray' speichern
        $.get("test.xml", function(XMLmediaArray){
 
 
        // suche nach jedem (each) 'bluray' abschnitt 
        $(XMLmediaArray).find("bluray").each(function(){
 
 
        // gefundenen abschnitt in variable zwischenspeichern (cachen)
        var $myMedia = $(this);
 
    
        // einzelne werte auslesen und zwischenspeichern
        // attribute: funktion 'attr()'
        // tags: nach dem tag suchen & text auslesen
        var id = $myMedia.attr("id");
        var title = $myMedia.attr("title");
        var description = $myMedia.find("description").text();
        var genre = $myMedia.find("genre").text();
 
 
        // daten von jeden treffer ausgeben
        // unformatiert...nur zum zeigen!
        // append = inhalt/string dem kontainer anhängen
        $("#mediaContainer").append(
           "<h3>"+title+"</h3><p>"+id+" # "+description+" # "+genre+"</p>");
        });
 
     });
 
   });                
   </script>
 
</head>
<body>
 
<div id="mediaContainer">
</div>
 
</body>
</html>
