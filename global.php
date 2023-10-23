<?php
 $x=45;
 $y=25;

function sum()
{
    $GLOBALS ['z'] = $GLOBALS['x'] +  $GLOBALS['y'];
}
    sum();
    echo $z;
?>