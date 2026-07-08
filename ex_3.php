<?php
function esconderSen($string) {
    return str_repeat('$', strlen($string));
}

$sen = "12341";
echo esconderSen($sen) . "<br>";
echo $sen;
