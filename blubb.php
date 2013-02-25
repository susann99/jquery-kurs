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
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Formular Tag07</title>
    </head>
    <body>
<div class="box">a
</div>
        <div class="box">b
</div>
        <div class="box">c
</div>
        <div>frei</div>
</body>
</html>

