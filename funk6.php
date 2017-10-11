<?php
function palin($a)
{
       $b=strrev($a);
       if ($b==$a)
           echo "rijec ",$a," je palindrom";
       else
           echo "rijec ",$b," nije palindrom";

}
?>