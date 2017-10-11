<?php

function opseg($r=12)
{
    $o=$r*3.141;
    return $o;
}
$a=opseg();
echo "opseg kruga je ", $a;
?>