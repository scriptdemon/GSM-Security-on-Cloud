<?php
$rand = decbin(rand(0,getrandmax()));
	$len = strlen($rand);
	$rem = 128 - $len;
	for ($i=0; $i < $rem ; $i++) {
		$num = rand(0,1);
		$rand = $rand.strval($num);
	}
	echo $rand;

?>