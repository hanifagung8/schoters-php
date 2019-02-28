<?php
$file =  file_get_contents("https://private-90552-schoterspersonal.apiary-mock.com/categories");
$someArray = json_decode($file, true);
$arrOf = $_GET['argument1'];

function getJSON ($arrOf, $someArray) {
	$newArr = [];
	for ($i=0; $i < count($someArray); $i++) {
		if (in_array($someArray[$i]["name"], $arrOf)) {
			array_push($newArr, $someArray[$i]);
		}
	}
	return $newArr;
}

$hasil = getJSON($arrOf, $someArray);
$someJSON = json_encode($hasil);
echo $someJSON;