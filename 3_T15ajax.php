<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 12-todoliste anzeigen</title>
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <script src="meinplugin.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {//Ajaxscript
                $("button").click(function(){
                    $("#ausgabe").load("todo.html #web");
                });
     
                
            });
        </script>
    </head>
    <body>
        <button>todo.html per Ajax laden</button><br><br>
        Ausgabe:<span id="ausgabe">Hier kommt gleich Text rein.</span>
    </body>
</html>
