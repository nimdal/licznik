<!DOCTYPE html>
<html>
     <head>
	<meta charset="UTF-8" />
	<meta http-equiv="refresh" content="1" >
     </head>
<body>
<pre>
<img src=./pajak.gif><img src=./metal2.gif>
<?php
$time1 = mktime(12, 20, 0, 10, 24, 2020);
$time2 = time();
$time = $time2 - $time1;
$szescdziesiat = 60;
$doba = 24;
$minuty = $time / $szescdziesiat;
$godziny = $minuty / $szescdziesiat;
$doby = $godziny / $doba;
$pety = 50;
$petow = $pety * $doby;
$cena = 15.50;
$ile = $cena * $doby;

settype($minuty, 'integer');
settype($godziny, 'integer');
settype($doby, 'integer');

$sekundy2 = $minuty * $szescdziesiat;
$s2 = $time - $sekundy2;

$godziny2 = $godziny * $szescdziesiat;
$minuty2 = $minuty - $godziny2;

$doby2 = $doby * $doba;
$g2 = $godziny - $doby2;

echo "Nie palę już:\n\n";
echo "sekund: " . $time . "\n";
echo "minut:  " . $minuty . ":" . $s2 . "\n";
echo "godzin: " . $godziny . ":" . $minuty2 . "\n";
echo "dni:    " . $doby . ":" . $g2 . "\n\n\n";
echo "Nie spaliłem za ten czas:\n\n";
echo $petow . " papierosków\n\n\n";
echo "Pieniądze zaoszczędzone:\n\n";
echo $ile . " CBL\n\n";
?>
<?php
// <img src=./haha1.gif>
// <br>
?>
<img src=./metal.gif><img src=./kapela.gif>
</pre>
</body>
</html>
