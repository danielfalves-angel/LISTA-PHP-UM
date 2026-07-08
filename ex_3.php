<?php
function esconderSen($string) {
    return str_repeat('*', strlen($string));
}

$sen = "pipipopo";
echo esconderSen($sen) . "<br>";
echo $sen;
