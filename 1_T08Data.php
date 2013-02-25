<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
    $(document).ready(function(){
    $(this).data("vname","susann").data("nname","rieder");
      $("div:first").data("vname","susann1").data("nname","rieder2");
      $("div:last").data({
            vname:"Amalia",
            job:"Pilot",
            ort:{
                plz:"23483",
                stadt:"bad oldesloe"
            }
     });

      $(".clickdiv").click(function(){
          var vname = $(this).data().ort.plz;//beim data nicht die () vergessen!!!!
          console.log(vname);
      })
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Formular Tag07</title>
    </head>
    <body>
<div id="box1">box1 box1 box1</div>
<div id="box2">box1 box2 box1</div>
<div id="box3">box1 box3 box1</div>
<div id="box4" class="clickdiv">box1 box1 box1</div>
</body>
</html>

