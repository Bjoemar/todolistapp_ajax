<?php 

	
	$addtask = $_GET['to-do-task'];
	$status = ['task' => $addtask , 'status' => 'green'];

	


	$json_string = file_get_contents('../task.json');

	$php_array = json_decode($json_string, true);

	array_push($php_array, $status);

	$open = fopen('../task.json', 'w');

	fwrite($open, json_encode($php_array, JSON_PRETTY_PRINT));

	fclose($open);

	// header('location: ../index.php')

?>
