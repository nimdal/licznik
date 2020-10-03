<!DOCTYPE html>
<html>
     <head>
	<meta charset="UTF-8" />
	<meta http-equiv="refresh" content="1" >
     </head>
<body>
<pre>
<?php
$time1 = mktime(10, 00, 00, 10, 3, 2020);
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

$godziny2 = $godziny * $szescdziesiat;
$minuty2 = $minuty - $godziny2;

echo "Nie palę już:\n\n";
echo "sekund: " . $time . "\n";
echo "minut: " . $minuty . "\n";
echo "godzin: " . $godziny . ":" . $minuty2 . "\n";
echo "dób: " . $doby . "\n\n\n";
echo "Nie spaliłem za ten czas:\n\n";
echo $petow . " papierosków\n\n\n";
echo "Pieniądze zaoszczędzone:\n\n";
echo $ile . " CBL\n\n";
?>
<img src=./hura.gif><img src=./hura.gif><img src=./hura.gif>
</pre>
</body>
</html>
