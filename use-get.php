<?php
// using parameter get
if (isset($_GET['name']) && $_GET['age']) {
	$name = $_GET['name'];
	$age = $_GET['age'];
	echo json_encode(
		array(
			"name"=>$name,
			"age"=>$age
		)
	);
} else {
	exit("Data empty.");
}
?>