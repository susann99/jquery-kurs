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
     $(this).data("name","Earhart");
     $("#normal").data({
            vname:"Amalia",
            job:"Pilot",
            ort:{
                plz:"23483",
                stadt:"bad oldesloe"
            }
     });
     $(this).data({
         person:
          [
           {
            name:"Earhart",
            vname:"Amalia",
            job:"Pilot" 
           },
           {
            name:"Rieder",
            vname:"Susann",
            job:"Paddler" 
           },
         ]
     });
     var p = $(this).data().person;
     $("p").eq(2).text($(this).data().person[0].name+" "+$(this).data().person[0].job);
     console.log($(this).data());
     console.log($(this).data().job);
     console.log($(this).data().person[0].name);
     console.log($("#normal").data());
     console.log(p);
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Events Tag06, Data</title>
    </head>
    <body oncontextmenu="return false">
        <a href="index.php">Inhalt</a>
        <h1>jQuery Tag6 Data</h1>
        <div id="normal">
            <p id="test">Funktioniert nur im Body: height und wight setzen</p>
            <p>Bitte rechts Klicken</p>
            <p>Links klicken Menü verstecken</p>
            <p>überall klicken</p>
        </div>
        <nav>
            <ul>
                <li>Kanu</li>
                <li><a href="#" title="paddel">Paddel</a></li>
                <li><a href="http://www.globetrotter.de">Schwimmweste</a></li>
            </ul>
        </nav>
   <img src="images/Amelia-Earhart.png">
    </body>
</html>
