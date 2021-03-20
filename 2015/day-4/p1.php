<?php
$input = "iwrupvqb";

$i=0;
while(true)
{
	$hash = hash('md5', $input . $i);
	if(substr($hash, 0, 5) === "00000")
		break;
	$i++;
}

echo $i . "\n";