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
      $("div:liast").data("obj");
      $(".clickdiv").click(function(){
          var vname = $(this).data.("vname");
          alert(vname);
      })
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

