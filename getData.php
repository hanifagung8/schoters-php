<?php

$data = file_get_contents('https://blockchain.info/ticker');
$decoded_data = json_decode($data);



function getData(liz) {
	$erei = liz;
	$newArr = [];
	for ($i = 0; $i < count($erei); $i++) {
		for ($j = 0; $j < count($listOfJSON); j++) {
			if ($listOfJSON[$j].name == $erei[$i]) {
				array_push($newArr, $listOfJSON[$j]);
			}
		}
	}
	echo $newArr;
}