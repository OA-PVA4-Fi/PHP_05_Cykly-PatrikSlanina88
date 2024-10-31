<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni

$mesice = array("leden", "unor", "březen", "duben", "květen", "červen", "červenec", "srpen", "zaří", "říjen", "listopad", "prosinec");

foreach ($mesice as $value) {
    echo $value .'<br />';
}
echo '<br />';

for ($i = 5; $i < 12; $i++) {
    echo $mesice [$i] .'<br />';
}
?>
