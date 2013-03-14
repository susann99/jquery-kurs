<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Tag 17 Ajax und Json</title>
        <script type="text/javascript" src="js/jquery-1.9.1.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">//UTF8
            $(document).ready(function() {
                $("#code").hide();
                $("#senden1").click(function(){
                     $("#code").show();
                    $.ajax({
                        url:'jasoncontent.php',
                        dataType:'json',
                        data: {wert:4},
                        success: function(data, textStatus, jqXHR) {
                            alert("data:"+data.vorname+data.nname+" "+data.wert);
                        },
                        error: function(data, textStatus, jqXHR) {
                            $("#daten").html("<h2 class=\"error\">Error:</h2>")
                        }
                    }); 
                });
                $("#senden2").click(function(){
                    $.getJSON('jasoncontent.php', {wert:123}, function(data){
                        alert("data:"+data.vorname+data.nname+" "+data.wert);
                    });
                    });
                    $("#senden3").click(function(){
                        $.getJSON('jsonContentArray.php', function(data){
                            alert("data:"+data.vname+data.nname+" "+data.wert);
                            alert("starsse:"+data.obj.strasse+data.obj.hnr);
                        });
                    });

                });                
        </script>
    </head>
    <body>
        <button id="senden1">
            senden1         
        </button>
        <button id="senden2">
            senden2         
        </button>
        <button id="senden3">
            senden3         
        </button>
        <div id="code">
            <?php
            show_source(__FILE__);
            ?>
        </div>
    </body>
</html>