<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <style type="text/css"> 
          ﻿* {
	font-family:Arial, Helvetica, sans-serif;
	color:#333333;
	font-size:14px;
}

a {
	text-decoration:none;
	outline:none;
}
table {
	width: 550px;
	margin: 10px;
}
th {
	background: #CCCCCC;
	padding: 2px 11px;
	border-right: 1px solid #fff;
}
td {
	padding: 6px 11px;
	vertical-align: top;
}
td * {
	padding: 6px 11px;
}

.even {
	background-color:#EEEEEE;
}
.hover {
	background-color:#EEEEFF;
}
#dshow {
    display: none;
}

        </style>
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <!-- http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css -->
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/jquery.cycle.all.js" type="text/javascript"></script>
        <!-- http://code.jquery.com/ui/1.10.1/jquery-ui.js -->
        <script type="text/javascript">
            $(document).ready(function(){
		$('.paginated tr').mouseover(function(){
		    $(this).addClass('hover');
		});
		$('.paginated tr').mouseout(function(){
		    $(this).removeClass('hover');
		});
		$('.paginated tr:even').addClass('even'); 
		$("#bshow").click(function(){
		    $("#dshow").show(300);
		});
		$("#bhide").click(function(){
		    $("#dshow").hide(300);
		});
		$("#bfadeout").click(function() {
		    $("#dfade").fadeOut(300);
		});
		$("#bfadein").click(function() {
		    $("#dfade").fadeIn(300);
		});
		$("#bslidedown").click(function() {
			$("#dslide").slideDown(500);
		});
		$("#bslideup").click(function() {
		    $("#dslide").slideUp(500);
		});
            });
        </script>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Farb -Animation Tag08</title>
    </head>
<body>
<table id="sortable" class="paginated">
	<thead>
		<tr>
			<th class="numeric">Nr.</th>
			<th>Animation</th>
			<th>Code</th>
			<th>Erläuterung</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>show()</td>
			<td>$("#test").show(300);</td>
			<td>
			    <button id="bshow">Fahne Anzeigen</button>
			    <div id="dshow">
				<img src="images/anima1.png">
			    </div>
			</td>
		</tr>
		<tr>
			<td>2</td>
			<td>hide()</td>
			<td>$("#test").hide(300);</td>
			<td><button id="bhide">Fahne Weg</button></td>
		</tr>
		<tr>
			<td>3</td>
			<td>fadeOut()</td>
			<td>$("#test").fadeOut(300);</td>
			<td>
			    <button id="bfadeout">Fahne Ausblenden</button>
			    <div id="dfade">
				<img src="images/anima1.png">
			    </div>
			</td>
		</tr>
		<tr>
			<td>4</td>
			<td>fadeIn()</td>
			<td>$("#test").fadeIn(300);</td>
			<td>
			    <button id="bfadein">Fahne Einblenden</button>
			</td>
		</tr>
		<tr>
			<td>5</td>
			<td>slideUp()</td>
			<td>$("#test").slideUp(300);</td>
			<td>
			    <button id="bslideup">Fahne Einklappen</button>
			    <div id="dslide">
				<img src="images/anima1.png">
			    </div>
			</td>
		</tr>
		<tr>
			<td>6</td>
			<td>slideDown()</td>
			<td>$("#test").slideDown(300);</td>
			<td>
			    <button id="bslidedown">Fahne Ausklappen</button>
			</td>
		</tr>
	</tbody>
</table>
</body>
</html>
