
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>muster</title>
        <style>
            img[name=home2]{
                display: none; 
                width: 274px;
            }
        </style>
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css nacheinander -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/srplugin.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
		  var d = $("div");
//                  $("div").click(function(){
//		      $.showxy($(this));
//                    $.blender($(this));
//		  }); 
                  $("#home1").click(function() {
                      var bild2 = $("#home2");
                      $.bild2blender($(this),bild2);
                  });
                  $("#home2").click(function(event) {
                      var bild2 = $("#home1");
                      $.bild2blender($(this),bild2);
                  })
                });
        </script>
    </head>
    <body>
        <div class="rightpics"> 
                  <img class="bildhome" name="home1" id="home1" src="images/Amelia-Earhart.png" width="267" height="188">
                  <img class="bildhome" name="home2" id="home2" src="images/amelia_earhart2.jpg" width="267" height="188">
        </div>
        </div
    </body>
</html>