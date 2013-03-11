<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Person {

    public $vname;
    private $nname;
    private $wert;

    function __construct($vname, $nname) {
        $this->vname = $vname;
        $this->nname = $nname;
        # $this->wert = $wert;
    }

    public function getVname() {
        return $this->vname;
    }

    public function getNname() {
        return $this->nname;
    }

    public function getWert() {
        return $this->wert;
    }

# Set

    public function setVname($vname) {
        $this->vname = $vname;
    }

    public function setNname($nname) {
        $this->nname = $nname;
    }

    public function setWert($wert) {
        $this->wert = $wert;
    }

    public function toJsonStr() {
        return json_encode(get_object_vars($this));
    }

}

$sp1 = new Person("susann", "rieder");
if (isset($_GET['wert'])) {
    $sp1->setWert('get:' . $_GET['wert']);
} else if (isset($_POST['wert'])) {
    $sp1->setWert('post:' . $_POST['wert']);
}
$string = $sp1->toJsonStr();
echo $string.$sp1->getVname();
?>
