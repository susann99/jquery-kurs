<?php
$wert = $_GET["w"];
$text = $_POST["text"];
require('../libs/Smarty.class.php');

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
$arrMucki = array("Bankdrücken"=>"20","Bankziehen"=>"12","Lattziehen"=>"30");
$arrKajak = array("Sprint"=>"4","Start"=>"4","Strecke"=>"2");
$smarty->assign("muck",$arrMucki);
$smarty->assign("kajak",$arrKajak);
$smarty->display('ajaxtest.tpl');

?>
<div id="myDialog" title="Meldung von Ajax">
    Übertragung abgeschlossen! Alle Daten da?
</div>
