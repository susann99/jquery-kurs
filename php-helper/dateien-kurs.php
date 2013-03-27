<?php
require_once("../lib/Smarty.class.php");
$smarty =& new SmartySingleDir;
$smarty->assign("APP_MAIN_SCRIPT",$_SERVER["PHP_SELF"]);
require('jdateien.php');

$d = json_decode($objJTage);
$arr_tage = $d->tage;
//print_r($arr_tage);
//echo $d->tage[2]->dateien[0]->datei;
//$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 120;
//function getTageliste($tage,$mod=0){
//    foreach ($tage as $key => $value) {
//         $arrReturn['tage'][] = $value->tag;
//         
//    }
//}
//getTageliste($d->tage,$mod=0);

#$smarty->assign("TAGE", $arr_tage);

$smarty->display('tage.tpl');
?>
