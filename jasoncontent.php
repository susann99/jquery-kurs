<?php

$vname = "susann";
$nname = "rieder";
$wert = '';
if (isset($_GET['wert'])) {
    $wert = 'get:' . $_GET['wert'];
} else if (isset($_POST['wert'])) {
    $wert = 'post:' . $_POST['wert'];
}
echo '{
    "vorname":"' . $vname . '",
    "nname":"' . $nname . '",
    "wert":   "' . $wert . '"
     }';
?>
