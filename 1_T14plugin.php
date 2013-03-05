
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>RR - Meßwerte und Berechnungen</title>
        <link rel="stylesheet" href="css/jquery-ui.css" />
        <link rel="stylesheet" href="css/rr.css" />
        <style>

            html, body {
              margin: 0;
              padding: 0;
            }

            body {
              font: 80% Verdana, Helvetica, Arial, sans-serif;
              color: #000;
              background: #fff;
            }
            #container {
              margin: 10px 2em;
            }

            h1 {
              font-size: 2.5em;
              margin-bottom: 0;
            }

            h2 {
              font-size: 1.3em;
              margin-bottom: .5em;
            }
            h3 {
              font-size: 1.1em;
              margin-bottom: 0;
            }

            code {
              font-size: 1.2em;
            }

            a {
              color: #06581f;
            }
        </style>
        <script src="js/jquery-1.9.1.js" type="text/javascript" ></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>
        <script src="js/rrplugin.js"></script>
        <script type="text/javascript">
		$(document).ready(function() {
                    // Summe ------------------------------
                    var rrtabelle = $('#rrtabelle tbody');
                    var sys = rrtabelle.find('td:nth-child(3)').map(function(index,qty){
                        return $(qty).text();
                    }).get();
                    var dia = rrtabelle.find('td:nth-child(4)').map(function(index,qty){
                        return $(qty).text();
                    }).get();

                    var sum = $.mathUtils.sum(sys);
                    $('#sum').find('td:nth-child(3)').text(sum);
                    sum = $.mathUtils.sum(dia);
                    $('#sum').find('td:nth-child(4)').text(sum); 

                    // Mitellewerte --------------------------

                    var sysmittel = $.mathUtils.mittel(sys);
                    $('#mittel').find('td:nth-child(3)').text(sysmittel.toFixed(2));
                    var diamittel = $.mathUtils.mittel(dia);
                    $('#mittel').find('td:nth-child(4)').text(diamittel.toFixed(2));

                    // Mitellewerte --Morgens -----------------

                    var sysmo = rrtabelle.find("tr:contains('7:00')").find("td:eq(2)").map(function(index,qty){
                        return $(qty).text();
                    }).get();

                    var diamo = rrtabelle.find("tr:contains('7:00')").find("td:eq(3)").map(function(index,qty){
                        return $(qty).text();
                    }).get();

                    var sysmittelmo = $.mathUtils.mittel(sysmo);
                    $('#mittelmo').find('td:nth-child(3)').text(sysmittelmo.toFixed(2));
                    var diamittelmo = $.mathUtils.mittel(diamo);
                    $('#mittelmo').find('td:nth-child(4)').text(diamittelmo.toFixed(2));

                    // Mitellewerte --Abends -----------------

                    var sysab = rrtabelle.find("tr:contains('19:00')").find("td:eq(2)").map(function(index,qty){
                        return $(qty).text();
                    }).get();

                    var diaab = rrtabelle.find("tr:contains('19:00')").find("td:eq(3)").map(function(index,qty){
                        return $(qty).text();
                    }).get();

                    var sysmittelab = $.mathUtils.mittel(sysab);
                    $('#mittelab').find('td:nth-child(3)').text(sysmittelab.toFixed(2));
                    var diamittelab = $.mathUtils.mittel(diaab);
                    $('#mittelab').find('td:nth-child(4)').text(diamittelab.toFixed(2));

                    //Klassentausch ---------------------------
                    
                    $('table').click(function(){
                       $('tr').swapClass('one','two'); 
                    });
                    
                    // Schatten -------------------------------
//                        $('h1').schatten({
//                            copyOffset: function(index){
//                                return {x:-index,y:-2*index};//callback
//                            }
//                        });
                    $.fn.schatten.defs.copies=3;
                    $('h1').schatten({
                        copyOffset: function(index){
                            return {x:-index,y:index};//callback
                        }
                    });
                });
        </script>
    </head>
    <body>
        <h1>RR Meßwerte</h1>
        <table id="rrtabelle">
            <thead>
                <tr class="one">
                    <th>Datum</th>
                    <th>Uhrzeit</th>
                    <th>Sys</th>
                    <th>Dia</th>
                </tr>
            </thead>
            <tfoot>
                <tr id="sum" class="two">
                    <td>Total:</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="mittel">
                    <td>Mittel:</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="mittelmo">
                    <td>MittelMo:</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr id="mittelab">
                    <td>MittelAb:</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>13.02.2013</td>
                    <td>7:00</td>
                    <td>138</td>
                    <td>87</td>
                </tr>
                <tr>
                    <td>13.02.2013</td>
                    <td>19:00</td>
                    <td>140</td>
                    <td>93</td>
                </tr>
                <tr>
                    <td>14.02.2013</td>
                    <td>7:00</td>
                    <td>128</td>
                    <td>83</td>
                </tr>
                <tr>
                    <td>14.02.2013</td>
                    <td>19:00</td>
                    <td>117</td>
                    <td>78</td>
                </tr>
                <tr>
                    <td>15.02.2013</td>
                    <td>7:00</td>
                    <td>130</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>15.02.2013</td>
                    <td>19:00</td>
                    <td>120</td>
                    <td>72</td>
                </tr>
            </tbody>
        </table>

    </body>
</html>