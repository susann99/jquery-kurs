<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css">  
            .text {
                width:320px;color: red;
            }
            .green {
                color: green;
            }
            .classH1neu {
                background-color: gold;
                font-size: large;
            }
            .test {
                font-style: italic;
            }
            xmp {
                display: none;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
           
    $(document).ready(function(){
//        $("#normal p").each(function(i){
//            var inc = i+1;
//            $(this).text("dies "+inc+" und das");
//        });
        $("#normal p").each(function(){
            $(this).text("dies  und das");
        });
        var images = $("img").get(0);
        console.log("images: %o scr %o", images,images.src);
//      alert(images[0].src); //siehe bei get(0)
        var obj = $("#normal p");//Selektor und Context einer Collection
        obj.each(function(){
            $(this).text("Selektor: "+obj.selector);
            $(this).append(" Context: "+$(this).context.nodeName);
        });
        $("*").click(function(e){
            console.log("Klick an: %o, erkannt an %o",e.target, e.currentTarget);
        });       
        $("body").bind('mouseover',function(e){
            //console.log("MousePosition: %o x, %o y",e.pageX, e.pageY);
            $("#normal p").eq(1).text("Mouse Position:"+e.pageX+" "+e.pageY);
        });
        $("#weg").click(function(e){
            //console.log("MousePosition: %o x, %o y",e.pageX, e.pageY);
            $("#normal p").eq(1).text("geklickt:"+Date(e.timeStamp));
        });
        $("body").bind('mousedown mouseup',function(e){
            //console.log("MousePosition: %o x, %o y",e.pageX, e.pageY);
            $("#normal p").eq(2).text("which:"+e.type+" "+e.which);
        });
        $("body").bind('keydown',function(e){
            //console.log("MousePosition: %o x, %o y",e.pageX, e.pageY);
            $("#normal p").eq(3).text("which:"+e.type+" "+e.which);
        });
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Events Tag05, currentTarget, data, namespace</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <button id="weg">weg</button><button id="da">da</button>
        <h1>jQuery Tag5 Event-Objekt</h1>
        <div id="normal">
            <p id="test">show dient zum einblenden</p>
            <p>hide zum verstecken</p>
            <p>hide zum verstecken</p>
            <p>hide zum verstecken</p>
        </div>
        <img src="images/Amelia-Earhart.png">
    <xmp>
    so schauts dann aus, obwohl der Quelltext was anderes sagt
       <body>
            <a href="index.php">Inhalt</a>
            <h1>jQuery Tag4 Travestie-Kunst mit add</h1>
            <div id="normal" style="color: red;">
                <p>p2 hier ist ein p</p>
                <p id="test" style="color: red;">hier ist ein p</p><b>dazu addiert add=erzeugen und appendTo=anhängen</b>
            </div>
       </body>
    </xmp>
    </body>
</html>
