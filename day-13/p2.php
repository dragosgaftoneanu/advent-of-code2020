<?php
$input = <<<START
1003240
19,x,x,x,x,x,x,x,x,41,x,x,x,37,x,x,x,x,x,787,x,x,x,x,x,x,x,x,x,x,x,x,13,x,x,x,x,x,x,x,x,x,23,x,x,x,x,x,29,x,571,x,x,x,x,x,x,x,x,x,x,x,x,x,x,x,x,17
START;

$lines = explode("\r\n", $input);
preg_match_all('/[0-9x]+/', $lines[1], $buses);

$input = "solve ";

foreach($buses[0] as $k => $v)
	if($v != "x")
		$input .= "(t + $k) mod $v = 0;";

echo "Visit https://www.wolframalpha.com/input/?i=" . urlencode($input) . "\n";