
<?php 

$key = $_GET['my_list_task'];


	$json_string = file_get_contents('task.json');

	$php_array = json_decode($json_string, true);

	$key1 = array_search($key,$php_array);
	array_splice($php_array, $key1, 1);
	$open = fopen('task.json', 'w');

	fwrite($open, json_encode($php_array, JSON_PRETTY_PRINT));

	fclose($open);

	// header('location: index.php');
 ?>