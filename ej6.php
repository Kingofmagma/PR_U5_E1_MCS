<?php
$text = 'estas en tamaulipas';
$busc='ta';
$text=strtoupper($text);
$busc=strtoupper($busc);
echo "la string en mayuscula seria $text <br>";
echo "la string aparece " . substr_count($text, $busc) . " veces en el texto";
?>