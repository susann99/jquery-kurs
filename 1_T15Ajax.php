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
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">
		$(document).ready(function() {
                    var content = $('<html><head><title>test</title></head><body><div id="content2"><div>hallo</div><div>test</div></div></body></html>');
                    var body = $(content.clone()).find("body");
                    console.log(body);
                   $("#daten").html(content);
                   $("body").html($("#daten").find("#content2").html());
                })
        </script>
    </head>
    <body>
       
        <div id ="daten" style="display: none;">
            
        </div>
    </body>
</html>
