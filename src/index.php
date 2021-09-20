<?php
require '../src/Fighter.php';

// First Labour : Heracles vs Nemean Lion
$heracles = new Fighter('🗡️ Heracles', 20, 6);
$nemeLion = new Fighter('🦁 Lion de Némé', 11, 13);

// use your Figher class here
echo $heracles . '</br>';
echo $nemeLion . '</br>';

 $roundCount= 0;

while ($heracles->isAlive() && $nemeLion->isAlive())
{
    $roundCount+=1;
    echo '🤼' . $roundCount;
    $heracles->fight($nemeLion);
    $nemeLion->fight($heracles);
 
    
    echo  $heracles . " " .  $nemeLion . '</br>';


}
