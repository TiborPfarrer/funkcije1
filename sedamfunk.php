<?php
$broj = 3;
function auto($broj,$auti)
{
    if ($broj > 5)
        echo $broj**2;
    else
        echo $auti[$broj-1];
}

?>