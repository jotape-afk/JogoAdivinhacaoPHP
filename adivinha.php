<?php

$senha = 10;

do{

    $num = (int) readline("Digite um numero: ");

    $dif = abs($senha - $num);
    $dif1 = $senha - $num;

    if    ($dif1 > 0) {echo("↑ ");}
    elseif($dif1 < 0) {echo("↓ ");}

    if    ($dif <= 3) {echo("QUEIMANDO" . PHP_EOL);}
    elseif($dif <= 6) {echo("Bem quente" . PHP_EOL);}
    elseif($dif <= 9) {echo("Esquentando" . PHP_EOL);}
    else              {echo("Muito frio" . PHP_EOL);}

}while($num != $senha);

echo("CERTA RESPOSTA");

?>