<?php
$input = <<<START
1003240
19,x,x,x,x,x,x,x,x,41,x,x,x,37,x,x,x,x,x,787,x,x,x,x,x,x,x,x,x,x,x,x,13,x,x,x,x,x,x,x,x,x,23,x,x,x,x,x,29,x,571,x,x,x,x,x,x,x,x,x,x,x,x,x,x,x,x,17
START;

$lines = explode("\r\n", $input);
preg_match_all('/[0-9]+/', $lines[1], $buses);

$arrival = array();

foreach($buses[0] as $bus)
	$arrival[$bus] = ceil((int) $lines[0] / $bus) * $bus - (int) $lines[0];

echo "Result: " . (min($arrival) * array_search(min($arrival), $arrival)) .  "\n";