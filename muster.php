<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 17 Ajax und Json</title>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">//UTF8
            function loadPage(obj,target) {
                if (!obj.length && !target.length) return;
                obj.click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr("href");
                    obj.removeClass("current");
                    $(this).addClass("current");
                    target.fadeOut("slow",function() {
                        target.load(url,function() {
                            target.fadeIn("slow");
                        });
                    });
                });
            }
            // Wenn DOM geladen
            $(document).ready(function() {
                loadPage($("a"),$("#col-2"));
            });                
        </script>
    </head>
    <body>
        <a href="3_T04Traverse.php">hallo1</a> - <a href="logbuch2.html">hallo2</a> - <a href="Fragen.html">hallo3</a>
        <div id="col-2">
            <p>Der Inhalt wird hier eingesetzt.</p>
        </div>
    </body>
</html>
