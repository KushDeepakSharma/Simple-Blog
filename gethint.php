<?php
$a[] = "An123";
$a[] = "Britt765";
$a[] = "Cinde@98";
$a[] = "Di2345a";
$a[] = "Eva4565453";
$a[] = "Fi654rtghgf";
$a[] = "Gua34567uhgfcvb";
$a[] = "H3456uhgfcvbnhg";
$a[] = "I454yutygvcbvnbja";
$a[] = "J4354657uygfdcgfa";
$a[] = "Kwert654rthy5y";
$a[] = "Lin23454";
$a[] = "N345676fa";
$a[] = "Op2345654ia";
$a[] = "Pe2345654ia";
$a[] = "Am2345654da";
$a[] = "Ra3456787ytfvbel";
$a[] = "Cin34edfr45tfgt5tydy";
$a[] = "D345rdfgt56s";
$a[] = "E34rft56tgt5e";
$a[] = "Evefcvgtr5ta";
$a[] = "Suevgt45gyygvva";
$a[] = "Trfcvgr5tge";
$a[] = "U4r5676tghy6ti";
$a[] = "Vw4rt5456ty76et";
$a[] = "L4rgt656y76a";
$a[] = "Eliz4er45";
$a[] = "E45rft56yn";
$a[] = "Wwedfr5tyhy6te";
$a[] = "Ve4rt6yu7yy";
$q = $_REQUEST["q"];

$hint = "";
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
echo $hint === "" ? "no suggestion" : $hint;
?>