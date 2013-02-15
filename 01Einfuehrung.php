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
		$("#absatz").click(function(){
			$(this).addClass("text");	
		});
		$("#absatz").click(function(xy){
			alert('x='+xy.clientX+' y='+xy.clientY);
		});
            });
            
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>jQuery!</title>
    </head>
    <body>
        <a href="index.php">Inhalt</a>
        <div>jQuery Tag1 Einstieg<h1>Hallo im DIV</h1></div>
        <h1>1Hallo</h1>
        <h1>2Hallo</h1>
        <h1>3Hallo</h1>
	<div id="absatz">
		Star Trek Deutsch: Sternenreise, Reise durchs All ist der ubergreifende Titel fur sechs Science-Fiction-Fernsehserien mit insgesamt 726 Episoden sowie fur elf Kinofilme, zahlreiche Romane, Computerspiele und andere Werke, deren Inhalte auf der 1966 von Gene Roddenberry geschaffenen Fernsehserie Raumschiff Enterprise basieren.
	</div>
        <script type="text/javascript" >
            $("h1").addClass("test");
        </script>
    </body>
</html>


