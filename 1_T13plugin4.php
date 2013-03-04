
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>muster</title>
        <style>
/*            img[name=home2]{
                display: none; 
                width: 274px;
            }*/
        </style>
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css nacheinander -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/srplugin3.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
//		 var mp = new ImgFade("bilder");
//               new ImgFade("bilder2");
                    $("#bilder").ImgFade();
                });
        </script>
    </head>
    <body>
        <div id="bilder"> 
                  <img class="bildhome" name="home1" id="home1" src="images/Amelia-Earhart.png" width="267" height="188">
                  <img class="bildhome" name="home2" id="home2" src="images/amelia_earhart2.jpg" width="267" height="188">
                  <img class="bildhome" name="home3" id="home3" src="images/marine1.jpg" width="267" height="188">
                  <img class="bildhome" name="home4" id="home4" src="images/marine2.jpg" width="267" height="188">
                  <img class="bildhome" name="home4" id="home5" src="images/marine3.jpg" width="267" height="188">
        </div>        
    </body>
</html>