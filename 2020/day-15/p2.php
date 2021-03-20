<?php
$input =<<<START
8,11,0,19,1,2
START;

preg_match_all('/[\d]+/', $input, $numbers);
$numbers = array_flip(array_merge(array(""), $numbers[0]));

for ($i=count($numbers);$i<=30000000;$i++)
{
	if(empty($lastStep))
		$number = 0;
	else
		$number = $i - 1 - $lastStep;
	
	if(empty($numbers[$number]))
		$lastStep = 0;
	else
		$lastStep = $numbers[$number];
	
	$numbers[$number] = $i;
}

echo "Number: " . $number . "\n";