<?php
//konverensi suhu
$celcius = 30;
$fahrenheit ;
$kelvin ;
$reamur ;
$rankine ;

$fahrenheit = 9/5 * $celcius + 32;
$kelvin = $celcius + 273.15;
$reamur = $celcius * 4/5;
$rankine = ($celcius + 273.15) * 9/5;

echo ("<h3> konverensi suhu</h3>");
echo ("$celcius celcius = $fahrenheit fahrenheit <br>");
echo ("$celcius celcius = $kelvin kelvin <br>");
echo ("$celcius celcius = $reamur reamur <br>");
echo ("$celcius celcius = $rankine rankine <br>");