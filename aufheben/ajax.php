<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>muster</title>
         <link rel="stylesheet" href="css/jquery-ui.css" type="text/css"/>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js"></script>
        <script src="meinplugin.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {//Ajaxscript
                    $("div").click(function(){
                        $.ajax({
                            url:"testajax.php?div="+$(this).html(),
                            data:{div: 'newName', name:'susann'},
                            type: 'POST',
                            success: function(data,textStatus,jqXHR){
                              console.log("ok -> data: %o textStatus: %o, jqXHR: %o", data,textStatus,jqXHR );
                              $("#ausgabe").html(data);
                              $("#test").click(function(){
                                alert("ffff");
                               });
                             $("#myDialog").dialog();
                            },
                            error: function(data,textStatus,jqXHR){
                               console.log("error -> data: %o textStatus: %o, jqXHR: %o", data,textStatus,jqXHR); 
                            }
                        });
                    });
                });
        </script>
    </head>
    <body>

            <div>Test1</div>
            <div>Test2</div><div>Test3
            
</div>
       Ausgabe:<span id="ausgabe"></span>
       
    </body>
</html>
