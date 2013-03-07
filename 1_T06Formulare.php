<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
           body,html {height:100%;width:100%}
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
           
    $(document).ready(function(){
        $("#aus").click(function(){
            if($("#i1").is(':enabled')){
              $("#i1").attr('disabled','disabled');  
            }
        });
       
        $("#c1").click(function(){
           $('input[type=checkbox]').attr('checked','checked');
        });
        $('input#i1').change(function(){
            this.value = this.value+"kkk";
        });
        console.log($('#form1 :input[type=checkbox]').length);
        console.log($('#form1 :input[type=text]').length);
        console.log($('#form1 :input').length);
    });

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Events Tag06, Data</title>
    </head>
    <body>
        <div id="box1">
<form id="form1" action="#">
<p>Geben Sie hier einen Text mit führenden und/oder folgenden Leerzeichen ein:</p>
<input type="text" name="eingabe1" id="i1" value="test"/><br>
<input type="text" name="eingabe2" id="i2" /><br>

<input type="button" id="aus" value="aus"><input type="button" id="an" value="an"><br>
<input type="checkbox" name="eingabe" id="c1" />alle<br>
<input type="checkbox" name="eingabe" id="c2" />b<br>
<input type="checkbox" name="eingabe" id="c3" />c<br>
<input type="checkbox" name="eingabe" id="c4" />d<br>
<input type="checkbox" name="eingabe" id="c5" />e<br>
</form>
</div>

    </body>
</html>
