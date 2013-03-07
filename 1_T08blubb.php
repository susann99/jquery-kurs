<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
          
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
    $(document).ready(function(){
        $("body").css({height:100, "background-color":'green'});
        $("div").css({height:80, "background-color":'red'});
        $(".box").click(function(event){
            if(event.target == event.currentTarget){
                alert("test1");
            }
        });
        $("html").click(function(event){
            if(event.target == event.currentTarget){
                alert("test2");
            }
        });
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Formular Tag07</title>
    </head>
    <body>
<div class="box">aaaaaaaaaaa</div>
<div class="box">bbbbbbbbbbbbbb</div>
<div class="box">cccccccccccccccc</div>
<div>frei eieieieieieieie</div>
</body>
</html>

