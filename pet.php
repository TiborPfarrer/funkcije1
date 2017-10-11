<?php

function godine($godrod=205,$godsad=2000)
{
    if ($godrod==$godsad+1)
       echo "rodit ces se za 1 godinu";
    elseif ($godrod==$godsad-1)
        echo "star si 1 godinu";
    elseif ($godsad > $godrod+1)
        echo "star si ",($godsad-$godrod), "godina";
    else
        echo "bit ces roden za ",($godrod-$godsad), " godina";
}
godine();
?>