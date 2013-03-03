
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>muster</title>
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css nacheinander -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/srplugin.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
		  var d = $("div");
                  $("div").click(function(){
		      var a = $(this);
		      $.showxy(a);
		  });              
                });
        </script>
    </head>
    <body>
        <div>
            test 2
        </div>
        <div>
            kjasdhfjkashf 1
        </div>
        <div>
           dsffadsfasdf 1
        </div>
    </body>
</html>