<?php

function kvadrat($a=5, $b=7)
{
    $o=2*$a+2*$b;
    $pov=$a*$b;
    echo "povrsina je ", $pov;
    return $o;

}
$c=kvadrat();
echo " opseg kvadrata je ", $c;
?>