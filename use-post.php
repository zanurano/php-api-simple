<?php
// using parameter get
if (isset($_POST['name']) && $_POST['age']) {
	$name = $_POST['name'];
	$age = $_POST['age'];
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