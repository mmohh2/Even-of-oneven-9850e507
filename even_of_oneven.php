<?php

$g = '5';
$i = ($g / 2);
$j = round($i, 0);

$r = $j - $i;

if ($r == 0) {
echo "$g is even";
} else {
echo "$g is oneven";
}

?>
