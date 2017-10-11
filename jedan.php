<?php
echo "<table border='1'>";
$ocjene = array("Hrvatski" => 4,
                "Matematika" => 5,
                "Povijest" => 4 );
$zbroj = 0;
foreach ($ocjene as $value)
{
    $zbroj=$zbroj+$value;
}
echo ($zbroj/3);
?>