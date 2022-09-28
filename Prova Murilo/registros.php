<?php

echo("Os registro são: </br>");

$exibe = fopen("cadastro.txt", "r");

while (!feof($exibe)) {
        $linha = fgets($exibe);
        echo $linha ."<br>";
    }

fclose($exibe);

?>