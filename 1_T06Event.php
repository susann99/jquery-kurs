<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
           body,html {height:100%;width:100%}
            #rechteMaus {
                display: none;
                position: absolute;
                background-color: gold;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                padding: 5px;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
           
    $(document).ready(function(){
        $("body").bind('mousedown mouseup',function(e){
            //console.log("MousePosition: %o x, %o y",e.pageX, e.pageY);
            //$("#normal p").eq(3).text("which:"+e.type+" "+e.which);
            if(e.which==3){
                $("#rechteMaus").css({display:'block'});
                $("#rechteMaus").css("left",e.pageX+"px");
                $("#rechteMaus").css("top",e.pageY+"px");
            }
            if(e.which==1){
                $("#rechteMaus").css({display:'none'});
            }
	   });
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Events Tag06, Contextmenü rechte Maustaste</title>
    </head>
    <body oncontextmenu="return false">
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag6 Event-Objekt-Übung Contextmenü</h1>
        <div id="normal">
            <p id="test">Funktioniert nur im Body: height und wight setzen</p>
            <p>Bitte rechts Klicken</p>
            <p>Links klicken Menü verstecken</p>
            <p>überall klicken</p>
        </div>
        <nav id="rechteMaus">
            <ul>
                <li><a href="http://www.kanu.de">Kanu</a></li>
                <li><a href="http://www.globetrotter.de">Paddel</a></li>
                <li><a href="http://www.globetrotter.de">Schwimmweste</a></li>
            </ul>
        </nav>
   
    </body>
</html>
