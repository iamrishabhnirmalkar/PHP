<?php

$emp = [
    [1,"Rishabh","Manager", 600000],
    [2,"Alok","shop Manager", 12000], 
    [3,"Avesh","Admin", 50000],
    [4,"Suryansh","Oprator", 90000],
];

echo $emp[0][0] . " ";
echo $emp[0][2] . " ";
echo $emp[0][3]. " ";

echo"<pre>";
print_r($emp);
echo"</pre>";
?>