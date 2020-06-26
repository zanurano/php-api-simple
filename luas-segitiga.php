<?php
// menghitung luas segitiga
$arr = json_decode(file_get_contents("php://input"));
$jsonobj = '{"Zanur":35,"Niken":37,"Dinda":43}';

$objarr = json_decode($jsonobj, true);
if (empty($arr)){ 
	exit("Data empty.");
} else {
	$luas = 0.5 * $arr->alas * $arr->tinggi;
	echo json_encode(
		array(
			"Dummy"=>$objarr['Zanur'],
			"input"=>$arr, 
			"output"=> array("luas" => $luas)
		)
	);
}
?>