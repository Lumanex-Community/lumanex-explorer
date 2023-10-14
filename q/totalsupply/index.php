<?php
require '../util.php';
$config = (require '../../config.php');
$totalsupply = number_format(($config['totalSupply'] / $config['coinUnits']), 0, ".", "");
print_r($totalsupply);
?>



