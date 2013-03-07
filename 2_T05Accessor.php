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
           
            var person = function (){
                var vorname = "";
                var nachname = "";
                this.getNachname = function(){
                    return this.nachname;
                }
                this.setNachname = function(nachname){
                    this.nachname = nachname;
                }
            }
            var p = new person();
            p.setNachname("rieder");
            console.log("nachname: "+p.getNachname());
            console.log(p);
             console.log("obj: %o",p);
             var person2 = {
                 vorname: '',
                 nachname: '',
                 getNachname: function(){
                     return this.nachname;
                 },
                 setNachname: function(nachname){
                     this.nachname = nachname;
                 }
                 
             };
person2.setNachname("hoppe");
console.log("person2: %o",person2);
var objA = {
    wertA: 5,
    wertB: 6,
    wertC: 7,
    wertD: 10,
    obj: {
        testA:45,
        testB:11
    },
    func: function (){
        return "funcaaaaaa";
    }
};
var objB = {
    wertD: 8,
    wertE: 9,
    obj: {
        testA:45,
        testC:22
    },
    func: function (){
        return "funcbbbbbbbbbb";
    }
};
//console.log("objA: %o, objB %o", objA, objB);
var newObj = $.extend(true,{},objA, objB);//true rekursiev
//$.extend(objA, objB);//Prototyping, Plugins, neue Methoden
console.log("objA: %o, objB %o", objA, objB);
console.log("func: %o, objB %o", objA.func(), objB);
console.log("zusm: %o, objA %o,objB %o ",newObj, objA, objB);

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Animation Tag04</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <button id="weg">weg</button><button id="da">da</button>
        <h1>jQuery Tag5 Accessoren sind Eigenschaften der Collection: context, each, get, index, is, length, selector, size, toArray</h1>
        <div id="normal">
            <p id="test">show dient zum einblenden</p>
            <p>hide zum verstecken</p>
        </div>
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
