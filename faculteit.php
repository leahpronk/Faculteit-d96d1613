<?php

$faculteit = readline ("Van welk getal wil je de faculteit weten?");
$antwoord = 1;

for ($i = 1; $i <= $faculteit; $i ++){
	$antwoord = ($antwoord * $i);
}

echo $antwoord;