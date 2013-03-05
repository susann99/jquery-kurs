
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>muster</title>
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css nacheinander -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="meinplugin.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
                    test();
                    $.testFunc();
                    $.testFunc(12);
                    $.testFunc(12,23);
                    $.show();
                    $("div").display(34);
                });
        </script>
    </head>
    <body>
        <div>
            hallo 1
        </div>
        <div>
            hallo 1
        </div>
        <div>
            hallo 1
        </div>
    </body>
</html>