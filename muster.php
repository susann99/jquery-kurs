<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 20 Ajax und Json</title>
        <style>
            .test2 {
                background-color: yellowgreen;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">//UTF8
            $("document").ready(function(){
                $("a :eq(0)").click(function(){
                    $("#test").toggle(300);
                });
                $("a :eq(1)").click(function(){
                    $("#test").css("color","red");
                });
                $("a :eq(2)").click(function(){
                    $("#test").addClass("test2").css("color","darkblue");
                });
            })
        </script>
    </head>
    <body>
        <a href="#">hallo1</a> - <a href="#">hallo2</a> - <a href="#">hallo3</a>
        <div id="test">
            <p>Der Inhalt wird hier eingesetzt.</p>
        </div>
    </body>
</html>
