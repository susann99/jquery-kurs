<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$objJTage = '{"tage":[
                {
                    "tag":"01",
                    "thema":"Einführung in JQuery",
                    "dateien":[
                        {
                            "datei":"1_T01Einfuehrung.php",
                            "titel":"jQuery!",
                            "beschreibung":""
                        }
                    ]
                },
                {
                   "tag":"02",
                   "thema":"Selectoren",
                   "dateien":[
                        {
                            "datei":"1_T02Selectoren.php",
                            "titel":"Was sind Selectoren",
                            "beschreibung":""
                        }
                    ]
                }
                ,
                {
                   "tag":"03",
                   "thema":"Vereinfachungen",
                   "dateien":[
                        {
                            "datei":"1_T03Vereinfachungen.php",
                            "titel":"Was sind Selectoren",
                            "beschreibung":""
                        }
                    ]
                }
                ,
                {
                   "tag":"04",
                   "thema":"Filter, Traverse, Animation",
                   "dateien":[
                        {
                            "datei":"1_T04Filter.php",
                            "titel":"Filter1",
                            "beschreibung":""
                        },
                        {
                            "datei":"2_T04Filter.php",
                            "titel":"Filter2",
                            "beschreibung":""
                        },
                        {
                            "datei":"1_T04Traverse.php",
                            "titel":"Traverse1",
                            "beschreibung":""
                        },
                        {
                            "datei":"2_T04Traverse.php",
                            "titel":"Traverse2",
                            "beschreibung":""
                        }
                        ,
                        {
                            "datei":"3_T04Traverse.php",
                            "titel":"Traverse3",
                            "beschreibung":""
                        },
                        {
                            "datei":"4_T04Animation.php",
                            "titel":"Animation1",
                            "beschreibung":""
                        }
                    ]
                }
    ]}';
$d = json_decode($objJTage);
#print_r($test);
#echo $d->tage[2]->dateien[0]->datei;
// Mit den folgenden Zeilen lassen sich
// alle Dateien in einem Verzeichnis auslesen

$handle = opendir("..");
echo "Verzeichnisinhalt:<br>";
while ($datei = readdir($handle)) {
    if (stristr($datei, '_T')) {
        $arrdatei[]=$datei;
        
    }//if(stristr($string, 'Erde') === FALSE)
}
closedir($handle);
asort($arrdatei);
foreach ($arrdatei as $key => $val) {
    for($i=0;$i<22;$i++){
        $n=$i;
        if($i<10)$n="0".$n;
     if (stristr($val, 'T'.$n)) {
        $arrdateisub[$n][]=$val;
    }
    
     }
}
print_r($arrdateisub);

?>
