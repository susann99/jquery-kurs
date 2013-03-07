<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ajax - Linklisten</title>
        <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">
            $(document).ready(function() {
                (function($){
                    $.linkliste=({
                        aushtml:function(url){
                            $.ajax({
                            url:url,
                            context: document.body,
                            success: function(data,textStatus,jqXHR){
                              $(this).html(data);                       
                            },
                            error: function(data,textStatus,jqXHR){
                               $(this).html("Error");  
                            }
                        });
                        },
                        liste: function(liste){
                            return liste;
                        },
                        austext: function(text){
                            return text;
                        }
                    });
                })(jQuery);
               });
            $(document).ready(function(){
                $("#daten").html($.linkliste.aushtml('linktipps.html'));
            });
        </script>
    </head>
    <body>
        <div id ="daten"></div>
    </body>
</html>
