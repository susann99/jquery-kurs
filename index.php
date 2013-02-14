<!DOCTYPE html>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
  
            jQuery(document).ready(function(){

               jQuery("h1").addClass("classH1");
            });
            $(document).ready(function(){
                $("h1").addClass("classH1neu");
                $("h1").addClass("classH1neu");
                $("h1").addClass("classH1neu");
                $("h1").click(function(){
                    //$("this").removeClass("classH1"); Selector
                    $("h1:first").removeClass("classH1");
                    $("h1:eq(2)").removeClass("classH1");
                });
                $("div h1").addClass("classH1H2");
                $(".class").addClass("testA");
                //$(".class:not(:selected)");
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>jQuery!</title>
    </head>
    <body>
        <div>Hallo<h1>Test</h1></div>
         <h1>1Hallo</h1>
          <h1>2Hallo</h1>
           <h1>3Hallo</h1>
        <script type="text/javascript" >
            $("h1").addClass("test");
        </script>
    </body>
</html>

