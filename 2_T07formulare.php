<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
           body,html {
               height:100%;width:100%;
               font: 14px Helvetica, Arial, "Nimbus Sans L", FreeSans, sans-serif;
           }
           #box {
               position:relativ;
           }
           .error-input {border: red thin solid; color: red;}
           .error {color: red;text-align: center; position: absolute;z-index: 1000;width: 180px;height: 40px;padding: 8px;font-weight: bolder;
                  border: red thin solid; color: red;background-color: whitesmoke;opacity: 0.8;border-radius:6px;
                  webkit-box-shadow: 1px 1px 10px 1px #113B90;
                  -moz-box-shadow: 1px 1px 10px 1px #113B90;
                  -ms-box-shadow: 1px 1px 10px 1px #113B90;
                  box-shadow: 1px 1px 10px 1px #113B90;
           }
           /*Formular*/
           form {
            padding: 20px 0 0;
            margin: 20px auto;
            width: 420px;
            border-radius:10px;
            background:-moz-linear-gradient(bottom left, buttonface, #adf); /* Firefox */
            background:-webkit-linear-gradient(bottom left, buttonface, #adf); /* Safari, Chrome */
            background:-o-linear-gradient(bottom left, buttonface, #adf); /* Opera */
            background:-ms-linear-gradient(bottom left, buttonface, #adf); /* IE */
            background:linear-gradient(bottom left, buttonface, #adf);
            -webkit-box-shadow: 2px 1px 16px 2px #113B90;
            -moz-box-shadow: 2px 1px 16px 2px #113B90;
            -ms-box-shadow: 2px 1px 16px 2px #113B90;
            box-shadow: 2px 1px 16px 2px #113B90;
           }
           fieldset {
              border: none;
              margin: 0;
              padding: 10px 20px 25px;
           }
           fieldset legend {
                font-weight: bold;
                font-size: 22px;
                margin:15px 0 0 6px;
           }
           label {
              display:block;
              cursor: pointer;
              font-weight: bold;
              line-height: 24px;
            }
           ol {
              list-style-type: none;
              margin: 0;
              padding: 0;
           }
           li {
              float: left;
              padding: 10px;
           }
           li.last {
              float: none;
              clear: both;
              text-align: right;
           }
           input, textarea {
            border-radius: 5px;
            -webkit-box-shadow: 1px 0px 3px 1px #ccc,inset 2px 1px 2px #ccc;
            -moz-box-shadow: 1px 0px 3px 1px #ccc,inset 2px 1px 2px #ccc;
            -ms-box-shadow: 1px 0px 3px 1px #ccc,inset 2px 1px 2px #ccc;
            box-shadow: 1px 0px 3px 1px #ccc,inset 2px 1px 2px #ccc;
            
            background-color: whitesmoke;
            color: #4d4d4d;
            border: 1px solid #45709A;
            font: 12px Helvetica, Arial, "Nimbus Sans L", FreeSans, sans-serif;
            padding: 6px 8px;
           }
           textarea {
            border-radius: 10px;
            width: 360px;
            overflow: auto;
          }
          input[type="button"] {
            background-color: #234DCD;
            color: #fff;
            cursor: pointer;
            font: italic bold 1em/1.2 Georgia, "Times New Roman ", Times, Cambria, "Nimbus Roman No9 L ", serif;
            border: 1px solid #1944C3;
            padding: 5px 10px;
            width: auto;
            -webkit-border-radius:4px;
            -moz-border-radius:4px;
            border-radius: 4px;
            background:-moz-linear-gradient(top, #1944C3, #0E398E); /* Firefox */
            background:-webkit-linear-gradient(top, #1944C3, #0E398E); /* Safari, Chrome */
            background:-o-linear-gradient(top, #1944C3, #0E398E); /* Opera */
            background:-ms-linear-gradient(top, #1944C3, #0E398E); /* IE */
            background:linear-gradient(top, #1944C3, #0E398E);
            -webkit-box-shadow: 1px 1px 2px 1px #09345E;
            -moz-box-shadow: 1px 1px 2px 1px #09345E;
            -ms-box-shadow: 1px 1px 2px 1px #09345E;
            box-shadow: 1px 1px 2px 1px #09345E;
            text-shadow: 1px 1px 3px #333;
            }
            input[type="button"]:hover {
              background: #1843C2;
              text-shadow: none;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script type="text/javascript" >
    $(document).ready(function(){
    $("#vname").data(
           {
            sel:"#vname",
            iafter:"#vname",
            errtext:"Bitte mindesten 3 Zeichen eingeben!"
           }
    );
    $("#nname").data(
           {
            sel:"#nname",
            iafter:"#nname",
            errtext:"Bitte mindesten 3 Zeichen eingeben!"
           }
    );
    $("#email").data(
           {
            sel:"#email",
            iafter:"#email",
            errtext:"Bitte eine gültige Email eingeben!" 
           }
    );
    $(".auswahl").data(
           {
            sel:".auswahl",
            iafter:"#auswahl1",
            errtext:"Bitte auswählen!" 
           }
    );
    $("#content").data(
           {
            sel:"#content",
            iafter:"#content",
            errtext:"Bitte einen Kommentar eingeben!" 
            }
    );
    $("#vname").change(function(){
        setCheckRemove();
        if($(this).val().length < 3)getCheck($(this),1);
    });
    $("#nname").change(function(){
        setCheckRemove();
        if($(this).val().length < 3)getCheck($(this),1);
    });
    $("#email").change(function(){
       setCheckRemove();
       if(!getCheckEmail($(this).val()))getCheck($(this),1);
    });
    $("#content").change(function(){
        setCheckRemove();
        if($(this).val().length < 3)getCheck($(this),1);
    });
    $("#submit").click(function(){
        setCheckRemove();
        if($("#vname").val().length < 3) {
            getCheck($("#vname"),1);
        } else 
        if($("#nname").val().length < 3){
            getCheck($("#nname"),1);
        } else
        if(!getCheckEmail($("#email").val())){
            getCheck($("#email"),1);
        } else
        if(!$(".auswahl").is(":checked")){
            getCheck($(".auswahl"),1);
        } else
        if($("#content").val().length < 3){
           getCheck($("#content"),1);
        } else {
            setCheckRemove(); 
        }
    });
    function setCheckRemove(){
        $("input").removeClass("error-input");
        $("textarea").removeClass("error-input");
        $(".error").remove();
    }
    function getCheckEmail(email){
        if(!email.match(/\w[a-z0-9\.\-]+@\w[a-z0-9\.\-]+\.\w[a-z]+/gi))return false;
        return true;
    }
    function getCheck(a,err){
        var sel = a.data("sel");   
        var errtext = a.data("errtext");
        var iafter = a.data("iafter");
        setCheckRemove();
        if(err>0){
            $(sel).addClass("error-input");
            $('<span class="error">'+errtext+'</span>').insertAfter(iafter);
            var self = $(iafter);
             setTimeout(function(){
                self.focus();
            }, 1);            
        } 
    }
});

        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Formular Tag07</title>
    </head>
    <body>
<div id="box">
<form class="formular" action="#" method="post">
  <fieldset>
  <legend>Kontaktformular</legend>
  <ol class="clearfix">
    <li>
      <label for="firstname">Vorname:</label>
      <input type="text" name="vname" class="name" id="vname" value="" />
    </li>
    <li>
      <label for="lastname">Nachname</label>
      <input type="text" name="nname" class="name" id="nname" value="" />
    </li>
    <li>
      <label for="email">E-Mail(optional):</label>
      <input type="text" name="email" id="email" value="" />
    </li>
     <li>
      <label for="quelle">gefunden:</label>
            <input type="checkbox" name="auswahl" id="auswahl1" class="auswahl" />Googlesuche<br>
            <input type="checkbox" name="auswahl" id="auswahl2" class="auswahl" />Bekannter<br>
            <input type="checkbox" name="auswahl" id="auswahl3" class="auswahl" />Verlinkung<br>
            <input type="checkbox" name="auswahl" id="auswahl4" class="auswahl" />Zeitschrift<br>
            <input type="checkbox" name="auswahl" id="auswahl5" class="auswahl" />24-fair.com
    </li>
    <li>
      <label for="content">Nachricht:</label>
      <textarea cols="32" rows="7" name="content" id="content"></textarea>
    </li>
    <li class="last">
      <input type="button" name="submit" id="submit" value="Absenden" />
    </li>
  </ol>
  </fieldset>
</form>
</div>
</body>
</html>

