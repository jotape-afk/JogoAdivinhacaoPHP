<?php

$senha = rand(1, 100);

do{

    $num = (int) readline("Digite um numero (1 - 100): ");

    $dif = abs($senha - $num);
    $dif1 = $senha - $num;

    if    ($dif1 > 0) {echo("↑ ");}
    elseif($dif1 < 0) {echo("↓ ");}

    if    ($dif <= 3) {echo("QUEIMANDO" . PHP_EOL . PHP_EOL);}
    elseif($dif <= 6) {echo("Bem quente" . PHP_EOL . PHP_EOL);}
    elseif($dif <= 9) {echo("Esquentando" . PHP_EOL . PHP_EOL);}
    else              {echo("Muito frio" . PHP_EOL . PHP_EOL);}

}while($num != $senha);

echo(PHP_EOL . "CERTA RESPOSTA: " . $senha);

?>