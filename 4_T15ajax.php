<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 15-todoliste anzeigen</title>
        <style>
            #web h3{
                color:red;
            }
        </style>
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {//Ajaxscript
                $("button").click(function(){
                    
                 $( "#web" ).accordion({
      heightStyle: "content"

  }); $("#ausgabe").load("todo2.html div#web");
                });
                
            });
            
        </script>
    </head>
    <body>
        <button>todo.html per Ajax laden</button><br><br>
        <div id="web2">
                <h3>Tag 1</h3>
                <div>
                    Quelle: Frank Bongers, Maximilian Vollendorf, jQuery - Das Praxisbuch, 2010, Galileo Press<br>
                    Ein Javascript-Framwork:<br>
                    
                </div>
                <h3>Tag 2</h3>
                <div>
                    <ul>
                        <li>index.php ein kleines Projekt: jQuery-Tutorial</li>
                        <li>Mouseover-Effekte in der Navigation</li>
                        <li>Navigation durch den DOM</li>
                        <li>Text ein- und ausklappen</li>
                    </ul>
                   
                </div>
            </div>
        Ausgabe:<span id="ausgabe">Hier kommt gleich Text rein.</span>
    </body>
</html>
